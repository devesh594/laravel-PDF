<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class CustomerController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

    // public function index()
    // {
    //     $customers = Customer::all();
    //     return view('pages.index', compact('customers'));
    // }
    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return redirect()->route('pages.show', $customer->id);
    }

    public function edit(Customer $customer)
    {
        return view('pages.edit', compact('customer'));
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('pages.create');
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('pages.show', $customer->id);
    }

    public function show(Customer $customer)
    {
        return view('pages.show', compact('customer'));
    }
    public function downloadPdf(Customer $customer)
    {
        set_time_limit(300);
        $pdfPath = public_path('pdfs');

        if (!file_exists($pdfPath)) {
            mkdir($pdfPath, 0755, true);
        }

        $fileName = $pdfPath . '/customer_' . $customer->id . '.pdf';
        // $fileName = public_path('pdfs/customer_' . $customer->id . '.pdf');

        $html = view('pages.pdf', compact('customer'))->render();

        Browsershot::html($html)
            ->setChromePath("C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe")
            ->setOption('protocolTimeout', 120000)
            ->format('A4')
            ->landscape()
            ->save($fileName);

        return response()->download($fileName)->deleteFileAfterSend(true);
        // return redirect()->back()->with('success', 'Your PDF is being prepared for download.')->with('pdf_path', asset('pdfs/' . $fileName));
    }
}
