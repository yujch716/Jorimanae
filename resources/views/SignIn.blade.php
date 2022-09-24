@extends('Layout')

@section('content')
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                </div>

                <div class="col-lg-6 col-md-3">
                    <div class="checkout__order">
                        <form action="#">
                            <h4>로그인</h4>
                            <div class="checkout__input">
                                <p>아이디</p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>비밀번호</p>
                                <input type="text">
                            </div>
                            <button type="submit" class="site-btn">로그인</button>
                        </form>
                        <br>
                        <p style="text-align: right"><a href="/sign-up" style="font-weight: 700; ">회원가입</a></p>
                        <div> </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
