<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Tracking</title>
    
    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="/images/favicon.png" type="image/png"> -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💰</text></svg>">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="/css/app.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

</head>
<body style="background-color: #f1f5f9;">


<nav class="bg-white border-b border-gray-100">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
         <div class="flex">
            <div class="shrink-0 flex items-center">
               <a href="/">
                  <p data-testid="application-logo">💰 FINANCE</p>
               </a>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
               <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out" href="/dashboard">Dashboard</a>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"><a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="/transactions">Transactions</a></div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"><a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="/brands">Brands</a></div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"><a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="/categories">Categories</a></div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"><a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 border-indigo-400  text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="/item">Products</a></div>
         </div>
         <div class="hidden sm:flex sm:items-center sm:ml-6">
            <div class="ml-3 relative"><button class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Log Out</button></div>
         </div>
         <div class="-mr-2 flex items-center sm:hidden">
            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
               <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                  <path class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
               </svg>
            </button>
         </div>
      </div>
   </div>
   <div class="hidden sm:hidden">
      <div class="pt-2 pb-3 space-y-1"><a class="w-full flex items-start pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 text-base font-medium focus:outline-none transition duration-150 ease-in-out" href="/dashboard">Dashboard</a><a class="w-full flex items-start pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 text-base font-medium focus:outline-none transition duration-150 ease-in-out" href="/transactions">Transactions</a><a class="w-full flex items-start pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 text-base font-medium focus:outline-none transition duration-150 ease-in-out" href="/brands">Brands</a><a class="w-full flex items-start pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 text-base font-medium focus:outline-none transition duration-150 ease-in-out" href="/categories">Categories</a><a class="w-full flex items-start pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 text-base font-medium focus:outline-none transition duration-150 ease-in-out" href="/sms">SMS Parser</a></div>
      <div class="pb-1 border-t border-gray-200">
         <div class="space-y-1"><button class="w-full flex items-start pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 text-base font-medium focus:outline-none transition duration-150 ease-in-out">Log Out</button></div>
      </div>
   </div>
</nav>

<header class="bg-white shadow">
  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Products</h2>
      <button type="button" data-toggle="modal" data-target="#exampleModal" class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-blue-500 transition ease-in-out duration-150 undefined ">Create Products</button>
    </div>
  </div>
</header>



<div class="container">

<main>
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                           <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price Creattion</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price Selling</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catogrey</th>
                              <th scope="col" class="relative py-3"><span class="sr-only">Edit</span></th>
                           </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                          
                        <!-- Todo: Loop from here -->
                        @foreach ($item as $it)
                           <tr class="loaded" id="item-{{$it->id}}">
                              <td id="{{$it->id}}-id" class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">{{$it->id}}</td>
                              <td id="{{$it->id}}-name" class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">{{$it->name}}</td>
                              <td id="{{$it->id}}-price_creation" class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">SAR {{$it->price_creation}}</td>
                              <td id="{{$it->id}}-price_selling" class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">SAR {{$it->price_selling}}</td>
                              <td id="{{$it->id}}-category" class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-800">{{$it->category}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                 <button type="button" data-toggle="modal" data-target="#edit_exampleModal{{$it->id}}" class="ml-2">
                                    <span class="sr-only">Edit</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-gray-500">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                 </button>
                                 <button type="button" data-toggle="modal" data-target="#delete_exampleModal{{$it->id}}" class="ml-2">
                                    <span class="sr-only">Delete</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-gray-500">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                 </button>
                              </td>
                           </tr>
                           <!-- Loop end here -->
                           @endforeach
                        </tbody>

                     </table>
                  </div>
                  
               </div>

               <!-- Todo: if there is no items hide this button -->
               @if (sizeof($item) !== 0)
               <div class="text-center pt-5">
               <button type="button" data-toggle="modal" data-target="#silverModal" class="inline-flex items-center px-4 py-2 bg-rose-500 hover:bg-rose-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-rose-500 transition ease-in-out duration-150 undefined ">Silver Calculator</button>
               </div>
               @endif
            </div>
            
         </div>
      </div>
   </div>


<!-- Modal -->
<div class="modal fade" id="silverModal" tabindex="-1" aria-labelledby="silverModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="silverModal">Silver Calculator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/item">
            @csrf
              <div class="form-group">
                <label for="name">Product</label>
                <select name="product" id="silver_product" onchange="val()" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                <option value=""></option>
                @foreach ($item as $it)
                <option value="{{$it->id}}">{{$it->name}}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="price_creattion">Price Creattion</label>
                <input type="number" id="silver_price_creattion" value="" readonly class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>
              <div class="form-group">
                <label for="price_selling">Price Selling</label>
                <input type="number" id="silver_price_selling" value="" readonly class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>

              <div class="form-group">
                <label for="price_selling">Expected Demand</label>
                <input type="number" id="silver_Expected" value="" placeholder="Input the Expected Demand"  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-500 transition ease-in-out duration-150" data-dismiss="modal">Close</button>
        <button type="button" id="calculate"  class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-blue-500 transition ease-in-out duration-150">Calculate</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/item">
            @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
              </div>
              <div class="form-group">
                <label for="price_creattion">Price Creattion</label>
                <input type="number" id="price_creattion" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>
              <div class="form-group">
                <label for="price_selling">Price Selling</label>
                <input type="number" id="price_selling" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>
              <div class="form-group">
                <label for="catogrey">Catogrey</label>
                <select name="catogrey" id="catogrey" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                @foreach ($category as $cat)
                <option value="{{$cat->name}}">{{$cat->name}}</option>
                @endforeach
                </select>
              </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-500 transition ease-in-out duration-150" data-dismiss="modal">Close</button>
        <button type="button" id="create_prod"  class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-blue-500 transition ease-in-out duration-150">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/item">
            @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
              </div>
              <div class="form-group">
                <label for="price_creattion">Price Creattion</label>
                <input type="number" id="price_creattion" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>
              <div class="form-group">
                <label for="price_selling">Price Selling</label>
                <input type="number" id="price_selling" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>
              <div class="form-group">
                <label for="catogrey">Catogrey</label>
                <select name="catogrey" id="catogrey" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                @foreach ($category as $cat)
                <option value="{{$cat->name}}">{{$cat->name}}</option>
                @endforeach
                </select>
              </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-500 transition ease-in-out duration-150" data-dismiss="modal">Close</button>
        <button type="button" id="create_prod"  class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-blue-500 transition ease-in-out duration-150">Save changes</button>
      </div>
    </div>
  </div>
</div>

@foreach ($item as $it)
<!-- Edit - Modal -->
<div class="modal fade" id="edit_exampleModal{{$it->id}}" tabindex="-1" aria-labelledby="edit_exampleModalLabel{{$it->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_exampleModalLabel">Edit Product {{$it->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/item">
            @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="hidden" readonly id="id{{$it->id}}" value="{{$it->id}}" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                <input type="text"  id="edit_name{{$it->id}}" value="{{$it->name}}" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
              </div>
              <div class="form-group">
                <label for="price_creattion">Price Creattion</label>
                <input type="number" id="edit_price_creattion{{$it->id}}" value="{{$it->price_creation}}" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>
              <div class="form-group">
                <label for="price_selling">Price Selling</label>
                <input type="number" id="edit_price_selling{{$it->id}}" value="{{$it->price_selling}}" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" require>
              </div>
              <div class="form-group">
                <label for="catogrey">Catogrey</label>
                <select  id="edit_catogrey{{$it->id}}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                <option value="{{$it->category}}" selected >{{$it->category}}</option>
                @foreach ($category as $cat)
                <option value="{{$cat->name}}">{{$cat->name}}</option>
                @endforeach
                </select>
              </div>

              <!-- <input type="submit" value="Create" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> -->
            </form>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-500 transition ease-in-out duration-150" data-dismiss="modal">Close</button>
        <button type="button" id="edit_prod{{$it->id}}"  class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-blue-500 transition ease-in-out duration-150">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endforeach



@foreach ($item as $it)
<!-- Delete - Modal -->
<div class="modal fade" id="delete_exampleModal{{$it->id}}" tabindex="-1" aria-labelledby="delete_exampleModalLabel{{$it->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete_exampleModalLabel">Delete Product {{$it->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-500 transition ease-in-out duration-150" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="w-full inline-flex justify-center outline-none rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Delete</button> -->
        <a href="delete/{{$it->id}}" class="w-full inline-flex justify-center outline-none rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Delete</a>
      </div>
    </div>
  </div>
</div>
@endforeach




</main>


</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>


document.getElementById('calculate').onclick = function() {

    let costPerUnit = document.getElementById("silver_price_creattion").value;
    let sellingPricePerUnit = document.getElementById("silver_price_selling").value;
    let expectedDemand = document.getElementById("silver_Expected").value;
    // console.log(costPerUnit, sellingPricePerUnit, expectedDemand)
    optimalQuantity = costBenefitAnalysis(costPerUnit, sellingPricePerUnit, expectedDemand);
    swal({
        title: "Silver Calcuater",
        text: "The Optimum lot for production is "+optimalQuantity,
        icon: 'info',
        buttons: true
      })
    // console.log(optimalQuantity)
}


function calculateProfit(quantity, costPerUnit, sellingPricePerUnit) {
  const profit = (sellingPricePerUnit - costPerUnit) * quantity;
  return profit;
}

function costBenefitAnalysis(costPerUnit, sellingPricePerUnit, expectedDemand) {
  let maxProfit = 0;
  let optimalQuantity = 0;

  for (let quantity = 1; quantity <= expectedDemand; quantity++) {
    const profit = calculateProfit(quantity, costPerUnit, sellingPricePerUnit);
    if (profit > maxProfit) {
      maxProfit = profit;
      optimalQuantity = maxProfit;
    }
  }

  return optimalQuantity;
}

// const optimalQuantity = costBenefitAnalysis(costPerUnit, sellingPricePerUnit, expectedDemand);


function keepNumbersOnly(inputString) {
  var numbersOnly = inputString.replace(/\D/g, '');
  return numbersOnly;
}

function val(){

 id = document.getElementById("silver_product").value
 if (id == ""){
  document.getElementById("silver_price_creattion").value = ''
  document.getElementById("silver_price_selling").value = ''
 }else{

  
 document.getElementById("silver_price_creattion").value = keepNumbersOnly(document.getElementById(id+"-price_creation").textContent)
 document.getElementById("silver_price_selling").value =  keepNumbersOnly(document.getElementById(id+"-price_selling").textContent)
 

}
}





function ValidateEmail(input) {

var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

if (input.match(validRegex)) {
  return true;
} else {
  return false;
}

}



document.getElementById('create_prod').onclick = function() {

    let name = document.getElementById("name").value;
    let price_creattion = document.getElementById("price_creattion").value;
    let price_selling = document.getElementById("price_selling").value;
    let catogrey = document.getElementById("catogrey").value;

if (name.length==0 || price_creattion.length==0 || price_selling.length==0 || catogrey.length==0 ){

   swal({
  title: "Please Check your Inputs",
  text: "Make sure all input are not empty.",
  icon: "warning"
  })

}else{
    axios.post('/item', {
    name: name,
    price_creation: price_creattion,
    price_selling: price_selling,
    category: catogrey,
  })
  .then(function (response) {
      
      if (response.data.type == "success"){
        swal({
        title: response.data.title,
        text: response.data.msg,
        icon: response.data.type,
        buttons: false
      })
        setTimeout(function () { location.href = "./item";}, 3000);
      }else{
        swal({
        title: response.data.title,
        text: response.data.msg,
        icon: response.data.type,
      })
      }
  })
  .catch(function (error) {
    console.log(error);
  });

}



}

@foreach ($item as $it)
document.getElementById('edit_prod{{$it->id}}').onclick = function() {

    let edit_name = document.getElementById("edit_name{{$it->id}}").value;
    let edit_price_creattion = document.getElementById("edit_price_creattion{{$it->id}}").value;
    let edit_price_selling = document.getElementById("edit_price_selling{{$it->id}}").value;
    let edit_catogrey = document.getElementById("edit_catogrey{{$it->id}}").value;
    let id = document.getElementById("id{{$it->id}}").value;

if (edit_name.length==0 || edit_price_creattion.length==0 || edit_price_selling.length==0 || edit_catogrey.length==0 ){

   swal({
  title: "Please Check your Inputs",
  text: "Make sure all input are not empty.",
  icon: "warning"
  })

}else{
    axios.patch('/item', {
    id: id,
    name: edit_name,
    price_creation: edit_price_creattion,
    price_selling: edit_price_selling,
    category: edit_catogrey,
  })
  .then(function (response) {
      
      if (response.data.type == "success"){
        swal({
        title: response.data.title,
        text: response.data.msg,
        icon: response.data.type,
        buttons: false
      })
        setTimeout(function () { location.href = "./item";}, 3000);
      }else{
        swal({
        title: response.data.title,
        text: response.data.msg,
        icon: response.data.type,
      })
      }
  })
  .catch(function (error) {
    console.log(error);
  });

}



}


@endforeach

</script>
</body>
</html>