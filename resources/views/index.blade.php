@extends('layouts.master')

@section('main-content')
    <div class="container mx-auto p-4" x-data="{ step: 'start', otpSent: false, otp: '', name: '', email: '', userInfo: {} }">

        {{-- Form for Name & Email --}}
        <div x-show="step === 'start'" class="p-4 border rounded shadow-lg bg-white max-w-md mx-auto">
            <h2 class="text-xl font-bold mb-4">Register for the Sylhet 10k Trail Run 2024</h2>
            <form @submit.prevent="startRegistration">
                <div class="mb-4">
                    <label class="block font-semibold">Name</label>
                    <input type="text" x-model="name" class="w-full border rounded p-2" required>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold">Email</label>
                    <input type="email" x-model="email" class="w-full border rounded p-2" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
            </form>
        </div>

        {{-- OTP Verification --}}
        <div x-show="step === 'otp'" class="p-4 border rounded shadow-lg bg-white max-w-md mx-auto">
            <h2 class="text-xl font-bold mb-4">Enter OTP</h2>
            <p class="mb-2 text-gray-600">A one-time password has been sent to <span x-text="email"></span></p>
            <form @submit.prevent="verifyOtp">
                <div class="mb-4">
                    <label class="block font-semibold">OTP</label>
                    <input type="text" x-model="otp" class="w-full border rounded p-2" required>
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Verify OTP</button>
            </form>
        </div>

        {{-- Additional Info Form --}}
        <div x-show="step === 'info'" class="p-4 border rounded shadow-lg bg-white max-w-md mx-auto">
            <h2 class="text-xl font-bold mb-4">Provide Additional Information</h2>
            <form @submit.prevent="submitUserInfo">
                <div class="mb-4">
                    <label class="block font-semibold">Age</label>
                    <input type="number" x-model="userInfo.age" class="w-full border rounded p-2" required>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold">Phone</label>
                    <input type="text" x-model="userInfo.phone" class="w-full border rounded p-2" required>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold">Gender</label>
                    <select x-model="userInfo.gender" class="w-full border rounded p-2" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold">Address</label>
                    <input type="text" x-model="userInfo.address" class="w-full border rounded p-2" required>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold">T-Shirt Size</label>
                    <select x-model="userInfo.tshirt_size" class="w-full border rounded p-2" required>
                        <option value="S">Small</option>
                        <option value="M">Medium</option>
                        <option value="L">Large</option>
                        <option value="XL">X-Large</option>
                    </select>
                </div>
                <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded">Submit Information</button>
            </form>
        </div>
    </div>

    <script>
        function startRegistration() {
            axios.post('/register/email', {
                    name: this.name,
                    email: this.email
                })
                .then(response => {
                    if (response.data.success) {
                        this.step = 'otp';
                        this.otpSent = true;
                    } else {
                        alert(response.data.message);
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('An error occurred. Please try again.');
                });
        }

        function verifyOtp() {
            axios.post('/register/verify-otp', {
                    email: this.email,
                    otp: this.otp
                })
                .then(response => {
                    if (response.data.success) {
                        this.step = 'info';
                    } else {
                        alert(response.data.message);
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('An error occurred. Please try again.');
                });
        }

        function submitUserInfo() {
            axios.post('/register/info', {
                    ...this.userInfo,
                    email: this.email
                })
                .then(response => {
                    if (response.data.success) {
                        window.location.href = '/register/payment';
                    } else {
                        alert(response.data.message);
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('An error occurred. Please try again.');
                });
        }
    </script>
@endsection
