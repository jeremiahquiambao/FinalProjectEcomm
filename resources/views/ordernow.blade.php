@extends('master')
@section("content")

<div class="custom-product"> 
    <div class="col-sm-10">
        <table class="table">

        <tbody>
            <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>    
                <td>$ {{round($total*.12,2)}}</td>
            </tr>
            <tr>
                <td>Delivery Fee</td>
                <td>$ 10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>$ {{round($total+10+$total*.12,2)}}</td>
            </tr>
        </tbody>
        </table>
        <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group"> <label for="pwd">Delivery Address</label>
                 <textarea name="address" placeholder ="Please enter your delivery address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Choose a Payment Method</label> <br><br>
                <input type="radio" value="Debit Card" name="payment"><span>Debit Card</span> <br><br>
                <input type="radio" value="E-Payment" name="payment"><span>E-Payment</span> <br><br>
                <input type="radio" value="Cash" name="payment"><span>Cash on Delivery</span> <br><br>
            </div>
            <button type="submit" class="btn btn-success">CONFIRM ORDER</button>
            </form>
        </div>
    </div>
</div> 
@endsection