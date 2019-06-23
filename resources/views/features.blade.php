@extends('layouts.navbar')

@section('content')
<style>
  /* DIRTY Responsive pricing table CSS */
  
  /* 
  - make mobile switch sticky
  */
  * {
    box-sizing:border-box;
    padding:0;
    margin:0;
     outline: 0;
  }
  body { 
    font-family:Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size:14px;
    padding:14px;
  }
  article {
    width:100%;
    max-width:1000px;
    margin:0 auto;
    height:1000px;
    position:relative;
  }
  ul {
    display:flex;
    top:0px;
    z-index:10;
    padding-bottom:14px;
  }
  li {
    list-style:none;
    flex:1;
  }
  li:last-child {
    border-right:1px solid #DDD;
  }
  button {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space:nowrap; 
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.0;
    border-radius: .25rem;
  }
  li.active button {
    background:#F5F5F5;
    color:#000;
  }
  table { border-collapse:collapse; table-layout:fixed; width:100%; }
  th { background:#F5F5F5; display:none; }
  td, th {
    height:53px
  }
  td,th { border:1px solid #DDD; padding:10px; empty-cells:show; }
  td,th {
    text-align:left;
  }
  td+td, th+th {
    text-align:center;
    display:none;
  }
  td.default {
    display:table-cell;
  } /*<!-- Gray, Black, Orange, and white layout-->*/
  .bg-white {
    border-top:3px solid #A32362 /*add the color white code*/;
  }
  .bg-gray {
    border-top:3px solid #0097CF /*add the color gray code*/;
  }
  .bg-black {
    border-top:3px solid #0097CF /*add the color black code*/;
  }
  .bg-orange {
    border-top:3px solid #0097CF /*add the color orange code*/;
  }
  
  .sep {
    background:#F5F5F5;
    font-weight:bold;
  }
  .txt-l { font-size:28px; font-weight:bold; }
  .txt-top { position:relative; top:-9px; left:-2px; }
  .tick { font-size:18px; color:#2CA01C; }
  .hide {
    border:0;
    background:none;
  }
  
  @media (min-width: 640px) {
    ul {
      display:none;
    }
    td,th {
      display:table-cell !important;
    }
    td,th {
      width: 330px;
    
    }
    td+td, th+th {
      width: auto;
    }
  }
  </style>
  
 
  <br>
  <br>
  <br>
  <br>
  <br>
  
  
  <div class="container mb-4 justify-content-center mainform">
 
 
  <article>
  
    <ul>
      <li class="bg-purple">
        <button>Basic</button>
      </li>
      <li class="bg-blue">
        <button>Classic</button>
      </li>
      <li class="bg-blue active">
        <button>Enterprise</button>
      </li>
      <li class="bg-orange">
        <button>Premium</button>
      </li>
    </ul>  
    
    <table class="container mb-4 justify-content-center mainform">
      <thead>
        <tr>
          <th class="hide"></th>
          <th class="bg-white">Basic</th>
          <th class="bg-gray">Classic</th>
          <th class="bg-black default">Enterprise</th>
          <th class="bg-yellow">Premium</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Yearly price</td>
          <td><span class="txt-top"></span><span class="txt-l">Free</span></td>
          <td><span class="txt-top">&#8358;</span><span class="txt-l">60,000</span></td>
          <td class="default"><span class="txt-top">&#8358;</span><span class="txt-l">75,000</span></td>
          <td><span class="txt-top">&#8358;</span><span class="txt-l">85,000</span></td>
        </tr>
        <tr>
          <td>Monthly price</td>
          <td><span class="txt-top"></span><span class="txt-l">Free</span></td>
          <td><span class="txt-top">&#8358;</span><span class="txt-l">6,000</span></td>
          <td class="default"><span class="txt-top">&#8358;</span><span class="txt-l">7,500</span></td>
          <td><span class="txt-top">&#8358;</span><span class="txt-l">8,500</span></td>
        </tr>
        <tr>
          <td colspan="5" class="sep text-center">Exposure</td>
        </tr>
        <tr>
          <td>Categories</td>
          <td><span class="tick">Unlimited</span></td>
          <td><span class="tick">Unlimited</span></td>
          <td class="default"><span class="tick">Unlimited</span></td>
          <td><span class="tick">Unlimited</span></td>
        </tr>
        <tr>
          <td>Service Areas (State and LGA)</td>
          <td><span class="tick">Unlimited</span></td>
          <td><span class="tick">Unlimited</span></td>
          <td class="default"><span class="tick">Unlimited</span></td>
          <td><span class="tick">Unlimited</span></td>
        </tr>
        <tr>
          <td>Priority Listing</td>
          <td><span class="text">Normal</span></td>
          <td><span class="text">3x more clients than basic plan</span></td>
          <td class="default"><span class="text">5x more clients than basic plan</span></td>
          <td><span class="text">7x more clients than basic plan</span></td>
        </tr>
        <tr>
          <td>Trade Lead Visibility</td>
          <td><span class="text">72 hours after posting</span></td>
          <td><span class="text">Immediate</span></td>
          <td class="default"><span class="text">Immediate</span></td>
          <td class="default"><span class="text">Immediate</span></td>
        </tr>
        <tr>
          <td colspan="5" class="sep text-center">Branding</td>
        </tr>
        <tr>
          <td>Logo</td>
          <td><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td>Company Profile</td>
          <td><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td>Premium Label</td>
          <td><span class="tick">&#10060;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td>Account Verification</td>
          <td><span class="tick">&#10060;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td colspan="5" class="sep text-center">Connection</td>
        </tr>
        <tr>
          <td>Listed Phone Number</td>
          <td><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td>Website Link</td>
          <td><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td>E- Mail &SMS Notifications on Trade Leads</td>
          <td><span class="tick">&#10060;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td>In-Mailing</td>
          <td><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td>Home Owners Contact Details</td>
          <td><span class="tick">&#10060;</span></td>
          <td><span class="tick">&#10004;</span></td>
          <td class="default"><span class="tick">&#10004;</span></td>
          <td><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
          <td colspan="5" class="sep text-center">Reviews</td>
        </tr>
        <tr>
          <td>Reviews</td>
          <td><span class="tick">Unlimited</span></td>
          <td><span class="tick">Unlimited</span></td>
          <td><span class="tick">Unlimited</span></td>
          <td><span class="tick">Unlimited</span></td>
        </tr>
        <tr>
          <td></td>
          <td><a name="" id="" class="btn btn-primary" href="/home" role="button">FREE</a></td>
          <td><form method="POST" action="{{ route('pay') }}"  role="form">
                <input type="hidden" name="email" value="egundeyiolamide@gmail.com"> {{-- required --}}
                <input type="hidden" name="orderID" value="classic">
                <input type="hidden" name="amount" value="6000000"> {{-- required in kobo --}}
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                <button type="submit" class="btn btn-primary" value="Pay Now!">
                    BUY NOW
                </button>
               </form>
          </td>
          <td><form method="POST" action="{{ route('pay') }}"  role="form">
              <input type="hidden" name="email" value="egundeyiolamide@gmail.com"> {{-- required --}}
              <input type="hidden" name="orderID" value="enterprise">
              <input type="hidden" name="amount" value="7500000"> {{-- required in kobo --}}
              <input type="hidden" name="quantity" value="1">
              <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
              <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
              <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
              {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

              <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
              <button type="submit" class="btn btn-primary" value="Pay Now!">
                  BUY NOW
              </button>
             </form></td>
          <td><form method="POST" action="{{ route('pay') }}"  role="form">
              <input type="hidden" name="email" value="egundeyiolamide@gmail.com"> {{-- required --}}
              <input type="hidden" name="orderID" value="premium">
              <input type="hidden" name="amount" value="8500000"> {{-- required in kobo --}}
              <input type="hidden" name="quantity" value="1">
              <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
              <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
              <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
              {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

              <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
              <button type="submit" class="btn btn-primary" value="Pay Now!">
                  BUY NOW
              </button>
             </form></td>
        </tr>
      </tbody>
    </table>
      
    </article>
  
@endsection

