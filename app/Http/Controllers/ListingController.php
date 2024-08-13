<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public function index()
    {

        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag']))->paginate(5)
        ]);
    }

    //show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //create
    public function create()
    {
        return view('listings.create');
    }

    //store
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'email' => ['required', 'email'],
            'company' => 'required',
            'locaation' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created Successfully');
    }

    //show edit form
    public function edit(Listing $listing)
    {

        return view('listings.edit', ['listing' => $listing]);
    }

    //update data
    public function update(Request $request, Listing $listing)
    {

        //validate logged in user
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorised Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'email' => ['required', 'email'],
            'company' => 'required',
            'locaation' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing Updated Successfully');
    }

    //delete listing
    public function destroy(Listing $listing)
    {
        //validate logged in user
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorised Action');
        }

        $listing->delete();
        return redirect('/')->with('message' . 'Listing deleted successfully');
    }


    //manage lystings
    public function dashboard()
    {
        return view('dashboard', ['listings' => auth()->user()->listings()->get()]);
    }
}
