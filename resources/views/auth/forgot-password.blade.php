<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/forgotpassword.css') }}" />
    <title>Forgot Password</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">


                <form method="POST" action="{{ route('password.email') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">FORGOT YOUR PASSWORD?</h2>
                    <p style="color:white">Enter your email to reset the password</p>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Your Email" />
                    </div>

                    @error('email')
                        <p style="color:rgb(233, 54, 54);font-size:12px">{{ $message }}</p>
                    @enderror










                    <input type="submit" value="ENTER" class="btn solid" />
                </form>








            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <a href="/" class="logo">
                        <img src="{{ asset('images/ahs-logo.svg') }}" alt="" style="width:150px">
                    </a>
                    <h3>Where Flexibility Meets Productivity in Every Seat.</h3>
                    <p>

                    </p>
                    <a href="/users/sign_in" class="btn transparent" id="sign-up-btn">
                        Sign in
                    </a>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">


                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
    </script>
</body>

</html>
