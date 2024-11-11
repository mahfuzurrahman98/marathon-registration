<footer class="bg-gray-900 text-white py-8 mt-auto">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 items-start">
        <!-- Logo and Company Description -->
        <div class="">
            <img src="{{ asset('assets/images/logo-footer.png') }}" alt="Company Logo" class="w-auto h-14">
            <p class="text-md text-gray-200 mt-5">
                A trusted UK-based company providing graphic design, web design, and data services.
            </p>
        </div>

        <!-- Navigation Links -->
        <div class="md:flex md:justify-center pl-5 md:pl-0 mt-5 md:mt-0">
            <ul class="list-disc">
                <li><a href="{{ route('home') }}" class="text-navy-800 hover:text-orange-600">Home</a></li>
                <li><a href="{{ route('services') }}" class="text-navy-800 hover:text-orange-600">Services</a></li>
                <li><a href="{{ route('about') }}" class="text-navy-800 hover:text-orange-600">About</a></li>
                <li><a href="{{ route('contact') }}" class="text-navy-800 hover:text-orange-600">Contact</a></li>
                <li>
                    <a href="{{ route('start-a-project') }}" class="text-navy-800 hover:text-orange-600">
                        Start a Project
                    </a>
                </li>
            </ul>
        </div>

        <!-- Social Media and Contact Links -->
        <div class="flex md:justify-center mt-5 md:mt-0">
            <div class="flex flex-col gap-y-1 md:gap-y-3">
                <a href="mailto:info@globalcreationsit.co.uk" target="blank"
                    class="text-orange-400 hover:text-white flex items-center mb-4 md:mb-0">
                    <i class="fa-solid fa-envelope text-lg mr-1"></i>
                    info@globalcreationsit.co.uk
                </a>

                <a href="https://wa.me/447438481790" target="blank"
                    class="text-orange-400 hover:text-white flex items-center mb-4 md:mb-0">
                    <i class="fa-brands fa-whatsapp text-xl mr-1"></i>
                    WhatsApp
                </a>

                <a href="tel:+441234567890" target="blank"
                    class="text-orange-400 hover:text-white flex items-center mb-4 md:mb-0">
                    <i class="fa-solid fa-phone text-lg mr-1"></i>
                    +44 743 8481790
                </a>
            </div>
        </div>

        <div class="flex md:justify-center mt-2 md:mt-0">
            <div class="flex flex-col gap-y-1 md:gap-y-3">
                <a href="https://www.facebook.com/globalcreationsit" target="blank"
                    class="text-orange-400 hover:text-white flex items-center mb-4 md:mb-0">
                    <i class="fa-brands fa-facebook text-lg mr-1"></i>
                    Facebook
                </a>

                <a href="https://www.instagram.com/globalcreationsit" target="blank"
                    class="text-orange-400 hover:text-white flex items-center mb-4 md:mb-0">
                    <i class="fa-brands fa-instagram text-lg mr-1"></i>
                    Instagram
                </a>

                <a href="https://www.linkedin.com/company/globalcreationsit" target="blank"
                    class="text-orange-400 hover:text-white flex items-center">
                    <i class="fa-brands fa-linkedin text-lg mr-1"></i>
                    LinkedIn
                </a>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 text-center mt-6 pt-6 border-t border-[#D2D2D2]">
        <p>&copy; {{ date('Y') }}, Global Creations & IT</p>
    </div>
</footer>
