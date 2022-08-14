@extends('frontend.layouts.app')
@section('Prime Number')


@section('header')

<div class="container">
    <div class="row">
        <div class="col">
            <div class=" text-center ">
            <h3 class="text-center">Prime Number</h3>
        </div>
      </div>
    </div>
</div>

@endsection


@section('content')

<div class="container">
    <div class="row">
      <div class="col">
        <div class=" text-center ">
            <div id="msg" class="alert" role="alert">
                
            </div>
        </div>
      </div>
    </div>
</div>



<div class="container">
    <div class="row">
      <div class="col">
        <div class=" text-center ">
            <div class=""></div>
            number : <input type="number" name="" id="number">
            <input type="submit" onclick="primeNumber()" value="Submit">
        </div>
      </div>
    </div>
</div>





@endsection

@section('script')

<script>

function primeNumber(){

let myNumber = document.querySelector('#number').value;
// if (2 == myNumber || 3 == myNumber) {
    //     document.querySelector('#msg').innerHTML = myNumber + ' this is prime number';
    //     document.getElementById("msg").style.background = "SlateBlue";
    // }else{
    let isPrime = false;
    for (let i = 1; i <= myNumber; i++) {
        if (6 * i +1 == myNumber || 6 * i -1 == myNumber || 2 == myNumber || 3 == myNumber ) {
            isPrime = true ;
            break ;
        }
    }
// }
if (isPrime) {
    if ( myNumber % 5 == 0 && myNumber >= 13 || myNumber % 7 == 0 && myNumber >= 13) {
        document.querySelector('#msg').innerHTML = myNumber + ' this is not prime number';
        document.getElementById("msg").style.background = "red";
    }else{
        document.querySelector('#msg').innerHTML = myNumber + ' this is prime number';
        document.getElementById("msg").style.background = "SlateBlue";
    }
}else{
    document.querySelector('#msg').innerHTML = myNumber + ' this is not prime number';
    document.getElementById("msg").style.background = "red";
}

}

</script>

@endsection