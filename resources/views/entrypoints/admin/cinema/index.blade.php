<x-admin-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- Cinema登録リンクボタン --}}

    @foreach($cinemas as $cinema)
        {{-- Cinema一覧 --}}
    @endforeach
</x-admin-layout>
