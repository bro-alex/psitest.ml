<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://psyhotrauma.ru/img/logo.png" class="logo" alt="Логотип Академии">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
