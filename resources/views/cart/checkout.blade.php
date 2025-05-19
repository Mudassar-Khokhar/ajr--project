@extends('layouts.app')

<div class="container py-5">
    <h1 class="text-center mb-5" style="color: #D4AF37;">Checkout</h1>
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow bg-gray-800 mb-4">
                <div class="card-header bg-gray-700 border-bottom border-gold">
                    <h5 class="mb-0 text-gold">Order Summary</h5>
                </div>
                <div class="card-body">
                    @foreach($cart as $id => $details)
                        <div class="row mb-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ asset('storage/'.$details['image']) }}" 
                                     class="img-fluid rounded" alt="{{ $details['name'] }}">
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-white">{{ $details['name'] }}</h5>
                                <p class="text-muted">Quantity: {{ $details['quantity'] }}</p>
                                @if($details['size'])
                                    <p class="text-muted">Size: {{ $details['size'] }}</p>
                                @endif
                                @if($details['color'])
                                    <p class="text-muted">Color: {{ $details['color'] }}</p>
                                @endif
                            </div>
                            <div class="col-md-4 text-end">
                                <p class="price">${{ number_format($details['price'] * $details['quantity'], 2) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow bg-gray-800">
                <div class="card-header bg-gray-700 border-bottom border-gold">
                    <h5 class="mb-0 text-gold">Payment Details</h5>
                </div>
                <div class="card-body">
                    <form id="checkoutForm" action="{{ route('cart.process') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-white">Full Name</label>
                            <input type="text" class="form-control bg-gray-700 text-white" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Email</label>
                            <input type="email" class="form-control bg-gray-700 text-white" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Address</label>
                            <textarea class="form-control bg-gray-700 text-white" name="address" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Payment Method</label>
                            <select class="form-select bg-gray-700 text-white" name="payment_method" required>
                                <option value="credit_card">Credit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="bank_transfer">Bank Transfer</option>
                            </select>
                        </div>
                        <hr class="bg-gold">
                        <div class="d-flex justify-content-between mb-4">
                            <strong class="text-white">Total</strong>
                            <strong class="text-white">${{ number_format($total, 2) }}</strong>
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Complete Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>