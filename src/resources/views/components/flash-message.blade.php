@if(Session::has('message'))
    @switch(Session::get('type'))
        @case(Session::get('type') == 'error')
        <div class="bg-red-100 p-5 rounded-md shadow">
            <p class="font-bold text-red-700"><i class="fa-solid fa-circle-xmark text-red-700 mr-2"></i>{{ Session::get('message') }}</p>
        </div>
        @break
        @case(Session::get('type') == 'info')
        <div class="bg-sky-100 p-5 rounded-md shadow">
            <p class="font-bold text-sky-700"><i class="fa-solid fa-circle-info text-sky-700 mr-2"></i>{{ Session::get('message') }}</p>
        </div>
        @break
        @case(Session::get('type') == 'warning')
        <div class="bg-yellow-100 p-5 rounded-md shadow">
            <p class="font-bold text-yellow-700"><i class="fa-solid fa-warning text-yellow-700 mr-2"></i>{{ Session::get('message') }}</p>
        </div>
        @break
        @case(Session::get('type') == 'success')
        <div class="bg-emerald-100 p-5 rounded-md shadow">
            <p class="font-bold text-emerald-700"><i class="fa-solid fa-circle-check text-emerald-700 mr-2"></i>{{ Session::get('message') }}</p>
        </div>
        @break
        @case(Session::get('type') == 'stock')
        <div class="bg-red-100 p-5 rounded-md shadow">
            <p class="font-bold text-red-700"><i class="fa-solid fa-circle-xmark text-red-700 mr-2"></i>{{ __('page.remove_items_before_checkout') }}</p>
            <ul class="ml-8">
                @foreach(Session::get('message') as $message)
                <li class="font-bold text-red-700">- {!! $message !!}</li>
                @endforeach
            </ul>
        </div>
        @break
    @endswitch
    @php
        \session()->forget('_flash');
        \session()->forget('message');
        \session()->forget('type');
    @endphp
@endif
