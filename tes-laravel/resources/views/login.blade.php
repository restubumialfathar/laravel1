<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />


</head>
<body>
    <nav><div class="navbar bg-primary text-primary-content">
        <button class="btn btn-ghost text-xl">TO DO LIST</button>
      </div></nav>

      <a href="/input"><button class="btn btn-outline btn-primary m-5">add</button></a>
      @php
      $no=1
  @endphp
      {{-- table start --}}
      <div class="overflow-x-auto">
          <table class="table">
            <!-- head -->
            <thead>
              <tr>
                <th>no</th>
               
                <th>judul</th>
                <th>isi</th>
               
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              @foreach ($todo as $s)
              <tr class="hover">
                <th>{{ $no }}</th>
                <td>{{ $s->judul }}</td>
                <td>{{ $s->isi }}</td>
                
                <td>
                  <form action="/update/{{ $s->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline btn-success my-1">Done</button>
                  </form>
                  <a href="/{{ $s->id }}/edit"><button class="btn btn-outline btn-info">Edit</button></a>
                </td>
                
              </tr>
              @endforeach
              @php
              $no++;
              @endphp
            </tbody>
          </table>
        </div>
      {{-- table end --}}
      <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>