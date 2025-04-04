<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    // protected $contact;
    // public $user;

    // public function __construct(Contact $contact)
    // {
    //     $this->contact     = $contact;
    //     $this->middleware(function ($request, $next) {
    //         $this->user = Auth::guard('admin')->user();
    //         return $next($request);
    //     });
    // }

    public function index(Request $request)
    {
        // if (is_null($this->user) || !$this->user->can('admin.contact.index')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title'] = "Manage Contact List";
        $data['rows'] = Contact::get();
        return view('admin.pages.contact.index', $data);
    }

    // public function create()
    // {
    //     // if (is_null($this->user) || !$this->user->can('admin.faq.create')) {
    //     //     abort(403, 'Sorry !! You are Unauthorized.');
    //     // }
    //     $data['title'] = "Create Content Generator";
    //     return view('admin.pages.content_generator.create', $data);
    // }

    // public function store(Request $request)
    // {
    //     // if (is_null($this->user) || !$this->user->can('admin.faq.create')) {
    //     //     abort(403, 'Sorry !! You are Unauthorized.');
    //     // }
    //     $request->validate([
    //         'title' => 'required',
    //         'body' => 'required',
    //     ]);

    //     DB::beginTransaction();

    //     try {

    //         $faq                   = new Faq();
    //         $faq->title            = $request->title;
    //         $faq->body             = $request->body;
    //         $faq->is_active        = $request->is_active;
    //         $faq->order_id         = Faq::max('order_id') + 1;
    //         $faq->created_by       = Auth::user()->id;
    //         $faq->created_at       = date('Y-m-d H:i:s');
    //         $faq->save();
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         Toastr::error(__('messages.toastr.faq_create_error'), 'Error', ["positionClass" => "toast-top-center"]);
    //         return back();
    //     }
    //     DB::commit();
    //     Toastr::success(__('messages.toastr.faq_create_success'), 'Success', ["positionClass" => "toast-top-center"]);
    //     return redirect()->route('admin.faq.index');
    // }


    // public function edit($id)
    // {
    //     // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
    //     //     abort(403, 'Sorry !! You are Unauthorized.');
    //     // }

    //     $data['title'] = "Update Pricing Table";
    //     // $data['row'] = Faq::find($id);
    //     return view('admin.pages.pricing.edit', compact('data'));
    // }

    // public function update(Request $request, $id)
    // {
    //     // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
    //     //     abort(403, 'Sorry !! You are Unauthorized.');
    //     // }

    //     $request->validate([
    //         'title' => 'required',
    //         'body' => 'required',
    //     ]);
    //     DB::beginTransaction();
    //     try {
    //         $faq                   = Faq::findOrFail($id);
    //         $faq->title            = $request->title;
    //         $faq->body             = $request->body;
    //         $faq->is_active        = $request->is_active;
    //         $faq->order_id         = $request->order_id;
    //         $faq->update_by        = Auth::user()->id;
    //         $faq->updated_at       = date('Y-m-d H:i:s');
    //         $faq->save();
    //     } catch (\Exception $e) {
    //         dd($e);
    //         DB::rollback();
    //         Toastr::error(__('messages.toastr.faq_update_error'), 'Error', ["positionClass" => "toast-top-center"]);
    //         return back();
    //     }
    //     DB::commit();
    //     Toastr::success(__('messages.toastr.faq_update_success'), 'Success', ["positionClass" => "toast-top-center"]);
    //     return redirect()->route('admin.faq.index');
    // }


    // public function view($id)
    // {
    //     // if (is_null($this->user) || !$this->user->can('admin.faq.view')) {
    //     //     abort(403, 'Sorry !! You are Unauthorized.');
    //     // }

    //     $data['title'] = __('messages.common.faq_view');
    //     $data['row'] = Faq::find($id);

    //     return view('admin.faq.view', compact('data'));
    // }



    public function delete($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.contact.delete')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $contact = Contact::findOrFail($id);
        $contact->delete();

        Toastr::success('Contact delete successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function toggleStatus(Request $request)
    {
        $row = Contact::find($request->id);
        if ($row) {
            $row->status = $request->status;
            $row->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Status updated successfully!'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Failed to update status.'
        ], 400);
    }
}
