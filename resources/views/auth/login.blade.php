<x-layouts.auth>
    <x-slot name="content">
        <div class="welcome_bg">
            <img class="cover" src="{{asset('img/login/welcome_screen.png')}}">
        </div>

        <div id="container" class="welcome_container">
            <div class="welcome_title">
                <div class="logo"><img src="{{asset('img/login/logo_blue2.svg')}}" alt="신차연구소,카랩"></div>
                <h1 class="ff_HGGG">
                    <p>신차연구소, 카랩</p>
                    <p>시작해 볼까요?</p>
                </h1>
            </div>
        </div>

        <!-- start :: welcome_bottom_fix | 하단고정바 -->
        <div class="welcome_bottom_fix">
            <div class="btn_wrap">
                <a href="memCertify?mType=U" class="btn btn_start">일반회원</a>
                <a href="javascript:mnCount();" class="btn btn_manager">카매니저 회원</a>

                @isOfficeIp
                <a href="login2" class="btn btn_manager">관리자 로그인 😎</a>
                @endisOfficeIp
            </div>
        </div>
    </x-slot>
</x-layouts.auth>


@push('jquery')

@endpush
