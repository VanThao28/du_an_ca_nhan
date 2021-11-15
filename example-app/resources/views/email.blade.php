@component('mail::message')

# Xin Chào Bạn!!!

## Thông Tin & Đơn Hàng
@component('mail::table')
|     Name  |    Phone      |   Address     |     Email     |   ToTall      |
| --------- |:-------------:|:-------------:|:-------------:|:-------------:|
| {{ $order->name }}   |  {{ $order->phone }}   | {{ $order->address }}   | {{ $order->email }}   | {{ $order->toTalFinal }}   |
@endcomponent

## Thông Tin Sản phẩm
@component('mail::table')
|  Name Product   |     Price    |      Quantity     | Sale Off     |
| --------- | :---------------: | :----------: |:----------: |
@foreach ($order->products as $product)
|   {{ $product->name }}    |   {{ $product->price }}   | {{ $quantities[$product->id] }}  |{{ $product->sale_off }}%   |
@endforeach
@endcomponent

## Links

mời bạn mua thêm hàng tại đây.
@component('mail::button', ['url' => 'https://DaiLyShop.com.vn'])
    DaiLyShop
@endcomponent

# cảm ơn bạn đã ủng hộ chúng tôi.
@endcomponent
