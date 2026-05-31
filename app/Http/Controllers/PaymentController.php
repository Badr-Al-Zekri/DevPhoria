<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function showPaymentPage(Request $request)
    {
        // Dummy data for order summary
        $serviceName = $request->query('service', 'Premium IT Support');
        $servicePrice = (float) $request->query('price', '5000'); // Ensure price is float for calculations

        $finalTotal = $servicePrice;

        return view('pages.payment', compact('serviceName', 'servicePrice', 'finalTotal'));
    }

    public function processPayment(Request $request)
    {
        $validated = $request->validate([
            'service_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|string|in:credit_card,paypal,apple_pay,stc_pay',
            'card_holder_name' => 'nullable|string|max:255',
            'card_number' => 'nullable|string|max:255',
            'expiry_date' => 'nullable|string|max:5',
            'cvv_code' => 'nullable|string|max:4',
            'terms_check' => 'accepted',
        ]);

        // Simulate a successful payment transaction for demonstration purposes
        $transactionId = 'TRX-' . Str::random(10);
        $status = 'completed'; // Assume payment is successful

        Payment::create([
            'service_name' => $validated['service_name'],
            'amount' => $validated['amount'],
            'currency' => 'USD',
            'payment_method' => $validated['payment_method'],
            'status' => $status,
            'card_holder_name' => $validated['card_holder_name'] ?? null,
            'transaction_id' => $transactionId,
        ]);

        return redirect()->route('payment')->with('success', 'Payment processed successfully! Transaction ID: ' . $transactionId);
    }
}
