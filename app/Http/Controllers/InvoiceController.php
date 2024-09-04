<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('admin.invoices.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        Invoice::create($validatedData);
        return redirect()->route('invoices.index');
    }

    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('admin.invoices.edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        $invoice = Invoice::findOrFail($id);
        $invoice->update($validatedData);
        return redirect()->route('invoices.index');
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('admin.invoices.show', compact('invoice'));
    }
}
