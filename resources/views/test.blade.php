@extends('layouts.app')

@section('content')
  <span class="relative inline-block flex-shrink-0 h-6 w-12 rounded-full flex"
        x-data="switchButton()"
        :class="parentClass()"
        @click="click()">
    <span class="rounded-full w-6 h-6 bg-white border border-gray shadow-inner shadow"
          :class="childClass()"></span>
  </span>

  <script>
    function switchButton() {
      return {
        on: false,
        click () {
          this.on = !this.on;
        },
        parentClass() {
          return { 'bg-gray-200': !this.on, 'bg-indigo-600': this.on, 'justify-start': !this.on, 'justify-end': this.on }
        },
        childClass() {
          return { 'translate-x-5': this.on, 'translate-x-0': !this.on };
        }
      }
    }
  </script>
@endsection

<table class="table">
  <thead>
  <tr>
    <th></th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td></td>
  </tr>
  </tbody>
</table>

<!-- Table component -->
<div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
  <table class="min-w-full divide-y divide-gray-200">
    <thead>
    <tr>
      {{ $head }}
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-100">
    {{ $body }}
    </tbody>
  </table>
</div>

<!-- Table heading component -->
<th class="px-6 py-3 bg-gray-100 {{ $attributes->get('class') }}">
  @unless($sortable)
    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ $slot }}</span>
  @else
    <button {{ $attributes->except('class') }} class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
      <span>{{ $slot }}</span>
      <span>
        @if($direction === 'asc')
          <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"></svg>
        @elseif($direction === 'desc')
          <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"></svg>
        @else
          <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"></svg>
        @endif
      </span>
    </button>
  @endunless
</th>

<!-- Table body row -->
<tr class="bg-white {{ $attributes->get('class') }}" {{ $attributes }}>
  {{ $slot }}
</tr>

<!-- Table row cell -->
<td class="px-6 py4 whitespace-no-wrap text-sm leading-5 text-gray-900 {{ $attributes->get('class') }}" {{ $attributes }}>
  {{ $slot }}
</td>
