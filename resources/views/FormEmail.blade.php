<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - Register</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        input:focus, textarea:focus {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen p-4">
    <div class="min-h-screen flex items-center justify-center">
        
        <div class="w-full max-w-lg bg-white rounded-2xl shadow-xl p-8 md:p-12 space-y-8 relative z-10">
            
            @if (session('success'))
                <div id="successMessage" class="flex items-center gap-3 p-4 bg-green-50 border-l-4 border-green-500 rounded-lg">
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <p class="text-green-700 font-medium">{{ session('success') }}</p>
                </div>
            @endif

            @if (session('error'))
                <div id="errorMessage" class="flex items-center gap-3 p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-red-700 font-medium">{{ session('error') }}</p>
                </div>
            @endif
            
            <div class="text-center space-y-1">
                <h1 class="text-3xl font-bold text-gray-900">Cloud Computing 2025</h1>
                <p class="text-gray-600 text-lg">Registration Form</p>
            </div>
            
            <form id="registrationForm" action="{{ route('FormEmail.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <label for="fullname" class="block text-sm font-semibold text-gray-700">
                        Full Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="fullname" name="name" placeholder="Enter Your Full Name" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#36b37e] focus:border-transparent transition-all duration-200" required>
                </div>
                
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-semibold text-gray-700">
                        Student Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Student Email"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#36b37e] focus:border-transparent transition-all duration-200" required>
                </div>

                <div class="space-y-2">
                    <label for="password" class="block text-sm font-semibold text-gray-700">
                        Password <span class="text-red-500">*</span>
                    </label>
                    <input type="password" id="password" name="password" placeholder="Create a secure password"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#36b37e] focus:border-transparent transition-all duration-200" required>
                </div>
                
                <div class="space-y-2">
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700">
                        Confirm Password <span class="text-red-500">*</span>
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#36b37e] focus:border-transparent transition-all duration-200" required>
                    <div id="passwordError" class="text-red-600 text-sm pt-1" style="display: none;">
                        Passwords do not match.
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="birth_date" class="block text-sm font-semibold text-gray-700">
                        Birth Date <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="birth_date" name="date_of_birth" placeholder="MM/DD/YYYY"
                           onfocus="(this.type='date')"
                           onblur="(if(!this.value) this.type='text')"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#36b37e] focus:border-transparent transition-all duration-200" required>
                </div>
                
                <div class="pt-4">
                    <button type="submit" 
                            class="w-full bg-[#36b37e] text-white font-bold py-4 px-6 rounded-xl hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 transition-all duration-200 ease-in-out transform hover:scale-[1.02] active:scale-[0.98] shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                        <span>Register for Cloud Computing 2025</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const form = document.getElementById('registrationForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('password_confirmation');
        const passwordError = document.getElementById('passwordError');

        form.addEventListener('submit', function(e) {
            if (password.value !== confirmPassword.value) {
                e.preventDefault();
                
                passwordError.style.display = 'block';
                
                // Add error styling
                confirmPassword.classList.add('border-red-500', 'focus:ring-red-500');
                password.classList.add('border-red-500', 'focus:ring-red-500');
            } else {
                // Hide error message
                passwordError.style.display = 'none';
                
                // Remove error styling
                confirmPassword.classList.remove('border-red-500', 'focus:ring-red-500');
                password.classList.remove('border-red-500', 'focus:ring-red-500');
            }
        });
    </script>
</body>
</html>