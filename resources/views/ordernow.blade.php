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
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 
<style>
    /* General container styling */
    .custom-product {
        margin-top: 30px;
        font-family: Arial, sans-serif;
    }

    /* Table styling */
    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .table td {
        padding: 12px;
        text-align: left;
        font-size: 16px;
    }

    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Total amount styling */
    .table tr:last-child td {
        font-weight: bold;
        font-size: 18px;
    }

    /* Form container styling */
    .form-group {
        margin-bottom: 20px;
    }

    /* Textarea styling */
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-top: 10px;
    }

    /* Payment method styling */
    .form-group label {
        font-size: 16px;
        margin-top: 10px;
    }

    .form-group input[type="radio"] {
        margin-right: 10px;
    }

    .form-group span {
        font-size: 16px;
    }

    /* Button styling */
    .btn {
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        background-color: #28a745;
        color: #006400;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #006400;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .table td {
            font-size: 14px;
        }

        .form-control {
            font-size: 12px;
        }

        .btn {
            width: 100%;
            font-size: 18px;

            
        }
    }
</style>
