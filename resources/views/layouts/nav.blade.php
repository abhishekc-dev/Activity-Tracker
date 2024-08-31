<nav>
    <div class="nav-wrapper px-4 py-2">
        <ul class="nav-links">
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            @if(!session()->has('userdata'))
                <li><a href="{{ url('register') }}" class="{{ request()->is('register') ? 'active' : '' }}">Register</a>
                </li>
            @endif
            @if(!session()->has('userdata'))
                <li><a href="{{ url('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">Login</a></li>
            @else
                <li><a href="{{ url('user/logout') }}">Logout</a></li>
            @endif
            <li><a href="{{ url('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Software</a>
            </li>
            <li><a href="{{ url('license') }}" class="{{ request()->is('license') ? 'active' : '' }}">License</a></li>
            <li><a href="{{ url('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" class="social-icon" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="social-icon" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="social-icon" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" class="social-icon" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="mailto:abhishekc9780@gmail.com" class="social-icon" aria-label="Email">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="tel:+9335684258" class="social-icon" aria-label="Phone">
                <i class="fas fa-phone-alt"></i>
            </a>
        </div>

    </div>
</nav>