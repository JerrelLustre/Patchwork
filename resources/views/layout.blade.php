
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;600&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
        <style>
.InternshipTagColor {
  background-color: #2b9985;
}

.InternshipBgColor {
  background-color: #31c9ad;
}

.QualityAssuranceTagColor {
  background-color: #e76c6c;
}

.QualityAssuranceBgColor {
  background-color: #eda0a0;
}

.WebScripting3TagColor {
  background-color: #b9a91a;
}

.WebScripting3BgColor {
  background-color: #dccb35;
}

.AppDev2TagColor {
  background-color: #AD8CE5;
}

.AppDev2BgColor {
  background-color: #CEB1FE;
}

.Portfolio2TagColor {
  background-color: #b99822;
}

.Portfolio2BgColor {
  background-color: #EAB631;
}

.EnterpriseTagColor {
  background-color: #528aba;
}

.EnterpriseBgColor {
  background-color: #7aadda;
}

.NMOperationTagColor {
  background-color: #DF6643;
}

.NMOperationBgColor {
  background-color: #db8b74;
}

.OnlineStoreTagColor{
  background-color: #4F9362;
}

.OnlineStoreBgColor {
  background-color: #72CA8A;
}

.CareerPrepTagColor {
  background-color: #DE6DC5;
}

.CareerPrepBgColor {
  background-color: #F59AE1;
}

/* Upcoming items have this border */

.upcomingBorder{
  border-color:rgb(236 107 107 / var(--tw-bg-opacity));
  border-width:0.2rem;
  box-sizing: border-box;
}
        </style>
        @vite('resources/css/app.css')
    

</head>

<body class="bg-offWhite dark:bg-black ">
  
@auth
<x-menu>
@include('partials._header')
</x-menu>  
@endauth

    @yield('content')


    </body>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </html>