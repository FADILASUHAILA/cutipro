<ul class="mb-8 mb-md-24 list-unstyled">
    <li class="mb-2">
        <a class="d-flex py-3 px-4 mx-4 align-items-center text-decoration-none rounded-4 fw-bold {{ request()->routeIs('dashboard.*') ? 'active bg-warning text-dark' : '' }}" href="{{ route('dashboard.index') }}" href="{{ route('dashboard.index') }}" style="color: white;">
            <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.8735 16.875V9.02647C16.8735 8.93939 16.8553 8.85327 16.8201 8.77363C16.7849 8.69399 16.7334 8.62259 16.669 8.56402L10.4185 2.88159C10.3035 2.77699 10.1536 2.71903 9.99808 2.71904C9.84259 2.71905 9.69269 2.77701 9.57765 2.88161L3.32807 8.56402C3.26365 8.6226 3.21218 8.69399 3.17695 8.77362C3.14173 8.85326 3.12354 8.93937 3.12354 9.02645V16.875" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M1.24854 16.875H18.7485" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M11.873 16.8743V12.4993C11.873 12.3336 11.8072 12.1746 11.69 12.0574C11.5728 11.9402 11.4138 11.8743 11.248 11.8743H8.74805C8.58229 11.8743 8.42331 11.9402 8.3061 12.0574C8.18889 12.1746 8.12305 12.3336 8.12305 12.4993V16.8743" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="mb-2">
        <a class="d-flex py-3 px-4 mx-4 align-items-center text-decoration-none rounded-4 text-white fw-bold {{ request()->routeIs('home.*') ? 'active bg-secondary' : '' }}" href="{{ route('home.index') }}">
            <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.25 6.875V14.0625C1.25 14.4769 1.41462 14.8743 1.70765 15.1674C2.00067 15.4604 2.3981 15.625 2.8125 15.625" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M8.125 8.4375H14.75" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M8.125 11.5625H14.75" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M4.48138 14.0625V5C4.48138 4.83424 4.55171 4.67527 4.6769 4.55806C4.8021 4.44085 4.97189 4.375 5.14894 4.375H17.8324C18.0095 4.375 18.1793 4.44085 18.3045 4.55806C18.4297 4.67527 18.5 4.83424 18.5 5V14.375C18.5 14.7065 18.3593 15.0245 18.109 15.2589C17.8586 15.4933 17.519 15.625 17.1649 15.625H2.8125C3.03166 15.625 3.24868 15.5846 3.45115 15.5061C3.65363 15.4275 3.83761 15.3124 3.99258 15.1674C4.14755 15.0223 4.27048 14.85 4.35435 14.6604C4.43822 14.4709 4.48138 14.2677 4.48138 14.0625V14.0625Z" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>History Record</span>
            <!-- <span class="d-flex ms-auto align-items-center justify-content-center bg-danger text-white rounded-circle" style="width: 24px; height: 24px; font-size: 10px;">3</span> -->
        </a>
    </li>
    <li class="mb-2">
        <a class="d-flex py-3 px-4 mx-4 align-items-center text-decoration-none rounded-4 fw-bold {{ request()->routeIs('karyawan.*') ? 'active bg-warning text-dark' : '' }}" href="{{ route('karyawan.index') }}" style="color: white;">
            <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.875 12.5C9.11866 12.5 10.9375 10.6812 10.9375 8.4375C10.9375 6.19384 9.11866 4.375 6.875 4.375C4.63134 4.375 2.8125 6.19384 2.8125 8.4375C2.8125 10.6812 4.63134 12.5 6.875 12.5Z" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M12.1416 4.52633C12.7004 4.3689 13.2864 4.33303 13.8602 4.42115C14.434 4.50927 14.9822 4.71933 15.468 5.03717C15.9538 5.35502 16.3658 5.77327 16.6763 6.26376C16.9868 6.75426 17.1886 7.30559 17.2681 7.88065C17.3476 8.4557 17.303 9.04111 17.1372 9.59745C16.9714 10.1538 16.6883 10.6681 16.307 11.1059C15.9256 11.5436 15.4549 11.8945 14.9266 12.135C14.3982 12.3755 13.8244 12.4999 13.2439 12.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M1.24976 15.4216C1.88424 14.5191 2.72655 13.7825 3.70558 13.274C4.68461 12.7655 5.77161 12.5 6.87482 12.5C7.97803 12.5 9.06506 12.7654 10.0441 13.2738C11.0232 13.7822 11.8656 14.5187 12.5001 15.4212" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M13.2439 12.5C14.3472 12.4992 15.4345 12.7643 16.4136 13.2728C17.3928 13.7813 18.235 14.5182 18.8689 15.4212" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>Karyawan</span>
        </a>
    </li>
    <li class="mb-2">
        <a class="d-flex py-3 px-4 mx-4 align-items-center text-decoration-none rounded-4 text-white fw-bold" href="#" data-bs-toggle="collapse" data-bs-target="#menus1-1">
            <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.8125 16.25H2.1875" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7.8125 16.25V6.875H12.1875" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M16.5625 3.125H12.1875V16.25H16.5625V3.125Z" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M3.4375 16.25V10.625H7.8125" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>Aproval</span>
            <span class="ms-auto">
                <svg width="10" height="7" viewbox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.75 1.5L5 5.25L1.25 1.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>
        </a>
        <!-- Dropdown -->
        <!-- <div class="collapse ps-6" id="menus1-1">
            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="#">
                <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.95325 10.3282L11.8907 3.1407L16.875 3.125L16.8593 8.1093L9.67184 14.0468" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M7.8125 12.1875L12.5 7.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.41732 15.4262L4.07817 17.7654C4.02013 17.8234 3.95123 17.8695 3.8754 17.9009C3.79957 17.9323 3.7183 17.9484 3.63622 17.9484C3.55415 17.9484 3.47288 17.9323 3.39705 17.9009C3.32122 17.8695 3.25232 17.8234 3.19428 17.7654L2.23457 16.8057C2.17654 16.7476 2.1305 16.6787 2.09909 16.6029C2.06768 16.5271 2.05151 16.4458 2.05151 16.3637C2.05151 16.2817 2.06768 16.2004 2.09909 16.1246C2.1305 16.0487 2.17654 15.9798 2.23457 15.9218L4.57372 13.5826C4.63176 13.5246 4.6778 13.4557 4.70921 13.3799C4.74062 13.304 4.75678 13.2228 4.75678 13.1407C4.75678 13.0586 4.74062 12.9774 4.70921 12.9015C4.6778 12.8257 4.63176 12.7568 4.57372 12.6988L2.9419 11.0669C2.82469 10.9497 2.75885 10.7908 2.75885 10.625C2.75885 10.4592 2.82469 10.3003 2.9419 10.1831L3.93302 9.19194C4.05023 9.07473 4.2092 9.00888 4.37496 9.00888C4.54072 9.00888 4.69969 9.07473 4.8169 9.19194L10.808 15.1831C10.9252 15.3003 10.9911 15.4592 10.9911 15.625C10.9911 15.7908 10.9252 15.9497 10.808 16.0669L9.8169 17.0581C9.69969 17.1753 9.54072 17.2411 9.37496 17.2411C9.2092 17.2411 9.05023 17.1753 8.93302 17.0581L7.3012 15.4262C7.18399 15.309 7.02502 15.2432 6.85926 15.2432C6.6935 15.2432 6.53453 15.309 6.41732 15.4262V15.4262Z" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span>Games</span>
            </a>
            <a class="d-flex mb-2 py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="#">
                <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.70833 15L17.2917 15C18.0971 15 18.75 14.316 18.75 13.4722V2.77778C18.75 1.93401 18.0971 1.25 17.2917 1.25L2.70833 1.25C1.90292 1.25 1.25 1.93401 1.25 2.77778V13.4722C1.25 14.316 1.90292 15 2.70833 15Z" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12.5 18.75H7.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M11.25 8.125L8.75 6.875V9.375L11.25 8.125Z" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span>Video</span>
            </a>
            <a class="d-flex py-3 px-4 align-items-center text-decoration-none text-white fw-bold" href="#">
                <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.75 4.375H17.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.625 2.5V6.25" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M2.4209 16.8743C3.1893 15.5442 4.29419 14.4398 5.62456 13.672C6.95493 12.9042 8.46393 12.5 9.99997 12.5C11.536 12.5 13.045 12.9043 14.3754 13.6721C15.7057 14.44 16.8106 15.5444 17.579 16.8744" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M14.6915 9.23303C14.3573 10.1354 13.7696 10.9221 12.9991 11.4987C12.2286 12.0752 11.3081 12.417 10.348 12.483C9.38797 12.549 8.42929 12.3364 7.58713 11.8708C6.74498 11.4052 6.05517 10.7063 5.60058 9.85813C5.14599 9.00997 4.94595 8.04859 5.02449 7.0895C5.10303 6.1304 5.45682 5.21438 6.04334 4.45148C6.62987 3.68857 7.42419 3.11124 8.33088 2.78883C9.23757 2.46642 10.2181 2.41265 11.1546 2.63397" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span>Streamers</span>
            </a>
        </div> -->
    </li>
    <li class="mb-2">
        <a class="d-flex py-3 px-4 mx-4 align-items-center text-decoration-none rounded-4 text-white fw-bold" href="#">
            <svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.54956 13.8327C2.61735 12.2612 2.29088 10.4035 2.63146 8.60832C2.97204 6.81315 3.95624 5.20407 5.39924 4.08321C6.84225 2.96235 8.6448 2.40682 10.4684 2.52094C12.292 2.63505 14.0113 3.41097 15.3033 4.70298C16.5953 5.99499 17.3712 7.71422 17.4853 9.53783C17.5995 11.3614 17.044 13.164 15.9231 14.607C14.8022 16.05 13.1932 17.0342 11.398 17.3748C9.60285 17.7154 7.7451 17.3889 6.17361 16.4567L6.17362 16.4567L3.58218 17.1971C3.47497 17.2277 3.36151 17.2291 3.25357 17.2011C3.14563 17.1732 3.04713 17.1168 2.96828 17.038C2.88943 16.9592 2.83311 16.8607 2.80514 16.7527C2.77717 16.6448 2.77857 16.5313 2.80921 16.4241L3.54962 13.8327L3.54956 13.8327Z" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7.5 8.4375H12.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7.5 11.5625H12.5" stroke="#7A899B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>Customers</span>
            <!-- <span class="py-1 px-2 ms-auto bg-danger text-white rounded-pill">9</span> -->
        </a>
    </li>
</ul>