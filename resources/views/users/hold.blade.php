<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ApexHubSpot</title>
  
</head>



<body class="font-semibold">

    <style>
        body::before {
    z-index: -1;
    content: ' ';
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url("../../public/images/ahs-apeMono.svg");
    background-repeat: no-repeat;
    background-size: 900px;
    background-position: -40% 40%;
    opacity: 0.04;
}

@media (max-width: 1240px) {
    body::before {
        background-size: 700px;
        background-position-y: -90%;
    }
}
@media (max-width: 976px) {
    body::before {
        background-size: 600px;
        background-position-y: -20%;
    }
}
@media (max-width: 768px) {
    body::before{
        background-size: 500px;
    }

    body.landing::before {
        background-position: 30% 250%;
    }
}
    </style>
    {{-- NavBar --}}
    <nav class="relative container mx-auto p-4 text-center md:p-6">
        {{-- Flex Container --}}
        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <a href="/" class="pt-2">
                <h1 class="font-bold text-2xl text-congressBlue lg:text-3xl">
                    <img class="display: inline-block h-8 pb-2 lg:h-10 lg:pb-3" src="{{ asset('images/ahs-ape.svg') }}"
                        alt="A">pexHubSpot
                </h1>
            </a>

        </div>
    </nav>

    <section>
        <div class="container mx-auto w-auto rounded-md text-center md:bg-slate-300 md:shadow-xl md:p-4 md:w-96">
            <h2 class="text-base mb-5">
                Your account is on hold or not approved. Please contact your administrator to give you access.
            </h2>
            <a href="/"
                class="p-3 px-6 pt-2 text-white bg-congressBlue hover:bg-cornflowerBlue rounded-full baseline text-lg lg:text-xl">
                Back
            </a>
        </div>
    </section>
</body>

</html>
