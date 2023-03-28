  @extends('layouts.main')

  @section('registration-section')
    <form acton="{{url('/')}}/registration" method="post" class="container mt-5">
        @csrf

        @php
          $data = 10;
        @endphp

        <x-input type="text" name="name" label="Please Enter your name" :data="$data"/>
        <x-input type="gmail" name="gmail" label="Please Enter your gmail"/>
        <x-input type="text" name="gander" label="Please Enter your gander"/>
        <x-input type="text" name="address" label="Please Enter your address"/>
        <x-input type="date" name="dob" label="Please Enter your dob"/>
        <x-input type="password" name="password" label="Please Enter your password"/>
        <x-input type="number" name="status" label="Please Enter your status 1/0"/>
        <x-input type="number" name="points" label="Please Enter your points in numerical value"/>
        <x-submitBtn name="form_sub_btn"/>
    </form>
@endsection










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>