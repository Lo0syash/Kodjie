<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="{{route('index.index')}}" class="logotype"><span class="logotype__span--color">k</span>odjie</a>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header__inner-func">
                <nav class="nav">
                    <ul class="nav-list">
                        <li><a href="{{route('index.admin')}}" class="nav-link">Админ панель</a></li>
                        <li><a href="{{route('catalog.index')}}" class="nav-link">Каталог</a></li>
                        <li><a href="{{route('index.about')}}" class="nav-link">О нас</a></li>
                        <li><a href="{{route('index.how')}}" class="nav-link">Где нас найти?</a></li>
                    </ul>
                </nav>
                <hr>
                <div class="header__inner-btn">
                    @guest()
                        <a href="{{route('auth.index')}}" class="auth-btn">
                            <span>Войти</span>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0015 6C16.0015 8.76142 13.7623 11 11
                                    11C8.23777 11 5.99851 8.76142 5.99851 6C5.99851 3.23858 8.23777 1 11 1C13.7623 1 16.0015
                                    3.23858 16.0015 6ZM14.001 5.99999C14.001 4.34314 12.6575 2.99999 11.0001 2.99999C9.34275 2.99999 7.99919 4.34314 7.99919 5.99999C7.99919 7.65684 9.34275 8.99999 11.0001 8.99999C12.6575 8.99999 14.001 7.65684 14.001 5.99999ZM20.893 19.55L19.0024 15.76C18.1545 14.0683 16.4239 13.0001 14.5311 13H7.46893C5.57614 13.0001 3.84555 14.0683 2.99758 15.76L1.10701 19.55C0.950991 19.8595 0.966419 20.2277 1.14778 20.5231C1.32915 20.8185 1.65058 20.9989 1.99728 21H20.0027C20.3494 20.9989 20.6709 20.8185 20.8522 20.5231C21.0336 20.2277 21.049 19.8595 20.893 19.55ZM4.78818 16.66L3.61782 19H18.3823L17.2119 16.66C16.7046 15.644 15.667 15.0015 14.5311 15H7.46899C6.33315 15.0015 5.29552 15.644 4.78818 16.66Z"
                                      fill="none"/>
                                <path d="M19.0024 15.76L19.4498 15.5368L19.4494 15.5359L19.0024 15.76ZM20.893 19.55L20.4456
                                    19.7732L20.4465 19.775L20.893 19.55ZM14.5311 13L14.5311 12.5H14.5311V13ZM7.46893 13V12.5H7.46891L7.46893
                                    13ZM2.99758 15.76L2.55059 15.5359L2.55016 15.5368L2.99758 15.76ZM1.10701 19.55L1.5535 19.775L1.55443 19.7732L1.10701 19.55ZM1.14778 20.5231L0.721686 20.7847L1.14778 20.5231ZM1.99728 21L1.99577 21.5H1.99728V21ZM20.0027 21V21.5L20.0042 21.5L20.0027 21ZM3.61782 19L3.17064 18.7763L2.8087 19.5H3.61782V19ZM4.78818 16.66L5.23536 16.8836L5.2355 16.8834L4.78818 16.66ZM18.3823 19V19.5H19.1914L18.8295 18.7763L18.3823 19ZM17.2119 16.66L16.7646 16.8834L16.7647 16.8836L17.2119 16.66ZM14.5311 15L14.5318 14.5H14.5311V15ZM7.46899 15V14.5H7.46831L7.46899 15ZM11 11.5C14.0383 11.5 16.5015 9.03771 16.5015 6H15.5015C15.5015 8.48514 13.4863 10.5 11 10.5V11.5ZM5.49851 6C5.49851 9.03771 7.96177 11.5 11 11.5V10.5C8.51377 10.5 6.49851 8.48514 6.49851 6H5.49851ZM11 0.5C7.96177 0.5 5.49851 2.96229 5.49851 6H6.49851C6.49851 3.51486 8.51377 1.5 11 1.5V0.5ZM16.5015 6C16.5015 2.96229 14.0383 0.5 11 0.5V1.5C13.4863 1.5 15.5015 3.51486 15.5015 6H16.5015ZM11.0001 3.49999C12.3815 3.49999 13.501 4.61942 13.501 5.99999H14.501C14.501 4.06685 12.9335 2.49999 11.0001 2.49999V3.49999ZM8.49919 5.99999C8.49919 4.61942 9.61875 3.49999 11.0001 3.49999V2.49999C9.06675 2.49999 7.49919 4.06685 7.49919 5.99999H8.49919ZM11.0001 8.49999C9.61875 8.49999 8.49919 7.38056 8.49919 5.99999H7.49919C7.49919 7.93313 9.06675 9.49999 11.0001 9.49999V8.49999ZM13.501 5.99999C13.501 7.38056 12.3815 8.49999 11.0001 8.49999V9.49999C12.9335 9.49999 14.501 7.93313 14.501 5.99999H13.501ZM18.555 15.9832L20.4456 19.7732L21.3404 19.3268L19.4498 15.5368L18.555 15.9832ZM14.5311 13.5C16.2347 13.5 17.7923 14.4615 18.5554 15.984L19.4494 15.5359C18.5166 13.675 16.613 12.5001 14.5311 12.5L14.5311 13.5ZM7.46893 13.5H14.5311V12.5H7.46893V13.5ZM3.44457 15.984C4.20773 14.4615 5.7653 13.5 7.46895 13.5L7.46891 12.5C5.38699 12.5001 3.48337 13.675 2.55059 15.5359L3.44457 15.984ZM1.55443 19.7732L3.445 15.9832L2.55016 15.5368L0.659585 19.3268L1.55443 19.7732ZM1.57388 20.2615C1.48321 20.1138 1.4755 19.9298 1.55349 19.775L0.660521 19.3249C0.426479 19.7892 0.449627 20.3416 0.721686 20.7847L1.57388 20.2615ZM1.99879 20.5C1.82532 20.4995 1.66456 20.4092 1.57388 20.2615L0.721686 20.7847C0.993735 21.2278 1.47584 21.4984 1.99577 21.5L1.99879 20.5ZM20.0027 20.5H1.99728V21.5H20.0027V20.5ZM20.4261 20.2615C20.3354 20.4092 20.1747 20.4995 20.0012 20.5L20.0042 21.5C20.5242 21.4984 21.0063 21.2278 21.2783 20.7847L20.4261 20.2615ZM20.4465 19.775C20.5245 19.9298 20.5168 20.1138 20.4261 20.2615L21.2783 20.7847C21.5504 20.3416 21.5735 19.7892 21.3395 19.3249L20.4465 19.775ZM4.06501 19.2236L5.23536 16.8836L4.34099 16.4363L3.17064 18.7763L4.06501 19.2236ZM18.3823 18.5H3.61782V19.5H18.3823V18.5ZM16.7647 16.8836L17.9351 19.2236L18.8295 18.7763L17.6591 16.4363L16.7647 16.8836ZM14.5304 15.5C15.4771 15.5013 16.3418 16.0368 16.7646 16.8834L17.6593 16.4366C17.0673 15.2513 15.8568 14.5018 14.5318 14.5L14.5304 15.5ZM7.46899 15.5H14.5311V14.5H7.46899V15.5ZM5.2355 16.8834C5.65828 16.0368 6.523 15.5013 7.46967 15.5L7.46831 14.5C6.14329 14.5018 4.93277 15.2513 4.34085 16.4366L5.2355 16.8834Z"
                                      fill="black"/>
                            </svg>
                        </a>
                    @endguest
                    @auth()
                        <a href="{{route('profile.index')}}" class="auth-btn">
                            <span>Профиль</span>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0015 6C16.0015 8.76142 13.7623 11 11
                                    11C8.23777 11 5.99851 8.76142 5.99851 6C5.99851 3.23858 8.23777 1 11 1C13.7623 1 16.0015
                                    3.23858 16.0015 6ZM14.001 5.99999C14.001 4.34314 12.6575 2.99999 11.0001 2.99999C9.34275 2.99999 7.99919 4.34314 7.99919 5.99999C7.99919 7.65684 9.34275 8.99999 11.0001 8.99999C12.6575 8.99999 14.001 7.65684 14.001 5.99999ZM20.893 19.55L19.0024 15.76C18.1545 14.0683 16.4239 13.0001 14.5311 13H7.46893C5.57614 13.0001 3.84555 14.0683 2.99758 15.76L1.10701 19.55C0.950991 19.8595 0.966419 20.2277 1.14778 20.5231C1.32915 20.8185 1.65058 20.9989 1.99728 21H20.0027C20.3494 20.9989 20.6709 20.8185 20.8522 20.5231C21.0336 20.2277 21.049 19.8595 20.893 19.55ZM4.78818 16.66L3.61782 19H18.3823L17.2119 16.66C16.7046 15.644 15.667 15.0015 14.5311 15H7.46899C6.33315 15.0015 5.29552 15.644 4.78818 16.66Z"
                                      fill="none"/>
                                <path d="M19.0024 15.76L19.4498 15.5368L19.4494 15.5359L19.0024 15.76ZM20.893 19.55L20.4456
                                    19.7732L20.4465 19.775L20.893 19.55ZM14.5311 13L14.5311 12.5H14.5311V13ZM7.46893 13V12.5H7.46891L7.46893
                                    13ZM2.99758 15.76L2.55059 15.5359L2.55016 15.5368L2.99758 15.76ZM1.10701 19.55L1.5535 19.775L1.55443 19.7732L1.10701 19.55ZM1.14778 20.5231L0.721686 20.7847L1.14778 20.5231ZM1.99728 21L1.99577 21.5H1.99728V21ZM20.0027 21V21.5L20.0042 21.5L20.0027 21ZM3.61782 19L3.17064 18.7763L2.8087 19.5H3.61782V19ZM4.78818 16.66L5.23536 16.8836L5.2355 16.8834L4.78818 16.66ZM18.3823 19V19.5H19.1914L18.8295 18.7763L18.3823 19ZM17.2119 16.66L16.7646 16.8834L16.7647 16.8836L17.2119 16.66ZM14.5311 15L14.5318 14.5H14.5311V15ZM7.46899 15V14.5H7.46831L7.46899 15ZM11 11.5C14.0383 11.5 16.5015 9.03771 16.5015 6H15.5015C15.5015 8.48514 13.4863 10.5 11 10.5V11.5ZM5.49851 6C5.49851 9.03771 7.96177 11.5 11 11.5V10.5C8.51377 10.5 6.49851 8.48514 6.49851 6H5.49851ZM11 0.5C7.96177 0.5 5.49851 2.96229 5.49851 6H6.49851C6.49851 3.51486 8.51377 1.5 11 1.5V0.5ZM16.5015 6C16.5015 2.96229 14.0383 0.5 11 0.5V1.5C13.4863 1.5 15.5015 3.51486 15.5015 6H16.5015ZM11.0001 3.49999C12.3815 3.49999 13.501 4.61942 13.501 5.99999H14.501C14.501 4.06685 12.9335 2.49999 11.0001 2.49999V3.49999ZM8.49919 5.99999C8.49919 4.61942 9.61875 3.49999 11.0001 3.49999V2.49999C9.06675 2.49999 7.49919 4.06685 7.49919 5.99999H8.49919ZM11.0001 8.49999C9.61875 8.49999 8.49919 7.38056 8.49919 5.99999H7.49919C7.49919 7.93313 9.06675 9.49999 11.0001 9.49999V8.49999ZM13.501 5.99999C13.501 7.38056 12.3815 8.49999 11.0001 8.49999V9.49999C12.9335 9.49999 14.501 7.93313 14.501 5.99999H13.501ZM18.555 15.9832L20.4456 19.7732L21.3404 19.3268L19.4498 15.5368L18.555 15.9832ZM14.5311 13.5C16.2347 13.5 17.7923 14.4615 18.5554 15.984L19.4494 15.5359C18.5166 13.675 16.613 12.5001 14.5311 12.5L14.5311 13.5ZM7.46893 13.5H14.5311V12.5H7.46893V13.5ZM3.44457 15.984C4.20773 14.4615 5.7653 13.5 7.46895 13.5L7.46891 12.5C5.38699 12.5001 3.48337 13.675 2.55059 15.5359L3.44457 15.984ZM1.55443 19.7732L3.445 15.9832L2.55016 15.5368L0.659585 19.3268L1.55443 19.7732ZM1.57388 20.2615C1.48321 20.1138 1.4755 19.9298 1.55349 19.775L0.660521 19.3249C0.426479 19.7892 0.449627 20.3416 0.721686 20.7847L1.57388 20.2615ZM1.99879 20.5C1.82532 20.4995 1.66456 20.4092 1.57388 20.2615L0.721686 20.7847C0.993735 21.2278 1.47584 21.4984 1.99577 21.5L1.99879 20.5ZM20.0027 20.5H1.99728V21.5H20.0027V20.5ZM20.4261 20.2615C20.3354 20.4092 20.1747 20.4995 20.0012 20.5L20.0042 21.5C20.5242 21.4984 21.0063 21.2278 21.2783 20.7847L20.4261 20.2615ZM20.4465 19.775C20.5245 19.9298 20.5168 20.1138 20.4261 20.2615L21.2783 20.7847C21.5504 20.3416 21.5735 19.7892 21.3395 19.3249L20.4465 19.775ZM4.06501 19.2236L5.23536 16.8836L4.34099 16.4363L3.17064 18.7763L4.06501 19.2236ZM18.3823 18.5H3.61782V19.5H18.3823V18.5ZM16.7647 16.8836L17.9351 19.2236L18.8295 18.7763L17.6591 16.4363L16.7647 16.8836ZM14.5304 15.5C15.4771 15.5013 16.3418 16.0368 16.7646 16.8834L17.6593 16.4366C17.0673 15.2513 15.8568 14.5018 14.5318 14.5L14.5304 15.5ZM7.46899 15.5H14.5311V14.5H7.46899V15.5ZM5.2355 16.8834C5.65828 16.0368 6.523 15.5013 7.46967 15.5L7.46831 14.5C6.14329 14.5018 4.93277 15.2513 4.34085 16.4366L5.2355 16.8834Z"
                                      fill="black"/>
                            </svg>
                        </a>
                        <form action="{{route('profile.logout')}}" method="post">
                            @csrf
                            <button type="submit" class="btn-exit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_429_11067)">
                                        <path d="M15 4.00098H5V18.001C5 19.1055 5.89543 20.001 7 20.001H15"
                                              stroke="black" stroke-width="2.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M16 15.001L19 12.001M19 12.001L16 9.00098M19 12.001H9" stroke="black"
                                              stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_429_11067">
                                            <rect width="24" height="24" fill="white"
                                                  transform="translate(0 0.000976562)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
