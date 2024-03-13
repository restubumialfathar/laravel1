<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <nav><div class="navbar bg-primary text-primary-content">
        <button class="btn btn-ghost text-xl">MASUKKAN DATA</button>
      </div></nav>

     {{-- form start --}}
   <form action="/store" method="POST">
    @csrf
       <label class="input input-bordered flex items-center gap-2 m-5">
       
      <input type="text" class="grow" name="judul" placeholder="judul" required/>
    </label>
    <label class="input input-bordered flex items-center gap-2 m-5">
     
      <input type="text" class="grow" name="isi" placeholder="isi" required/>
    </label>
    
    <button class="btn btn-primary m-5">add</button>
   </form>
   
  
    {{-- form end --}}
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>