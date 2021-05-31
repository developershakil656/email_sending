@component('mail::message')
# Hello {{$data['name']}}

{{$data['msg']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
