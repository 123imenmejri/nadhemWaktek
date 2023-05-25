<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\DeleteEmail;
use App\Mail\UpdateEmail;
use Illuminate\Http\Request;
use App\Models\FormSubmission;
use App\Mail\NewSubmission;
use Carbon\Carbon;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $formSubmission = FormSubmission::create([
            'name' => $request->input('name'),
            'color' => $request->input('colorChosen'),
            'message' => $request->input('message'),
            'start_date' => $request->input('start_date'),
            'lien' => $request->input('lien'),
            'Durée' => $request->input('durée'),
            'note' => $request->input('note'),
            'done_at' => null, // Set 'done_at' as null initially
        ]);

        $emailsInput = $request->input('emails');
        $emails = explode(',', $emailsInput);

        foreach ($emails as $email) {
            $trimmedEmail = trim($email);

            if (!empty($trimmedEmail)) {
                $formSubmission->emails()->create(['email' => $trimmedEmail]);

                // Send email to each address
                Mail::to($trimmedEmail)->send(new NewSubmission($formSubmission->name, $formSubmission->lien, $formSubmission->start_date, $formSubmission->Durée));
            }
        }

        return redirect('/hel');
    }

    public function update(Request $request, $id)
    {
        $event = FormSubmission::findOrFail($id);
        $event->name = $request->input('name');
        $event->start_date = $request->input('start_date');

        $event->save();

        Mail::to($event->email)->send(new UpdateEmail($event->name, $event->lien, $event->start_date, $event->Durée));

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $formSubmission = FormSubmission::findOrFail($id);

        // Get the emails before deleting the form submission
        $emails = $formSubmission->emails()->pluck('email')->toArray();
        foreach ($emails as $email) {
            Mail::to($email)->send(new DeleteEmail($formSubmission->name, $formSubmission->lien, $formSubmission->start_date, $formSubmission->Durée));
        }

        // Delete associated emails
        $formSubmission->emails()->delete();

        // Delete form submission
        $formSubmission->delete();

        // Send email to deleted addresses

        return response()->json(['success' => true]);
    }

    public function editnote($id)
    {
        $event = FormSubmission::findOrFail($id);

        return view('notes.create', ['ev' => $event]);
    }

    public function updatenote(Request $request, $id)
    {
        $event = FormSubmission::findOrFail($id);
        $event->note = $request->input('note');
        $event->save();

        return view('notes.create', ['ev' => $event]);
    }

    public function deleteNote($id)
    {
        $event = FormSubmission::findOrFail($id);
        $event->delete();

        return response()->json(['message' => 'Note deleted successfully']);
    }

    //delete user :
    public function delete($id)
    {
        // Retrieve the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile deleted successfully!');
    }
    

    public function index(){
        $currentDate = Carbon::now();
        $events = FormSubmission::all();
        $todoEvents = [];
        $doneEvents = [];
        $inProgressEvents = [];
     foreach ($events as $event) {
        $startDate = Carbon::parse($event->start_date);

        if ($startDate > $currentDate) {
            $todoEvents[] = $event;
        } elseif ($startDate->isSameDay($currentDate)) {
            $inProgressEvents[] = $event;
        } else {
            $doneEvents[] = $event;
        }
    }
    return view('/taskboard', compact('todoEvents', 'inProgressEvents', 'doneEvents'));
    }
}
