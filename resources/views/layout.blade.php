
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
.internshipTagColor {
  background-color: #2b9985;
}

.internshipBgColor {
  background-color: #31c9ad;
}

.qualityAssuranceTagColor {
  background-color: #e76c6c;
}

.qualityAssuranceBgColor {
  background-color: #eda0a0;
}

.webScripting3TagColor {
  background-color: #b9a91a;
}

.webScripting3BgColor {
  background-color: #dccb35;
}

.appDev2TagColor {
  background-color: #AD8CE5;
}

.appDev2BgColor {
  background-color: #CEB1FE;
}

.portfolio2TagColor {
  background-color: #b99822;
}

.portfolio2BgColor {
  background-color: #EAB631;
}

.enterpriseTagColor {
  background-color: #528aba;
}

.enterpriseBgColor {
  background-color: #7aadda;
}

.nmOperationTagColor {
  background-color: #DF6643;
}

.nmOperationBgColor {
  background-color: #db8b74;
}

.onlineStoreTagColor{
  background-color: #4F9362;
}

.onlineStoreBgColor {
  background-color: #72CA8A;
}

.careerPrepTagColor {
  background-color: #DE6DC5;
}

.careerPrepBgColor {
  background-color: #F59AE1;
}

        </style>
        @vite('resources/css/app.css')
    

</head>

<body class="bg-offWhite dark:bg-black ">
  
<x-menu>
@include('partials._header')
</x-menu>  

    @yield('content')


    </body>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </html>