<x-filament-panels::page>
    <div class="space-y-4" {{-- Ini adalah bagian real-time. Dijalankan jika ada event dari Pusher --}} x-data="{}" x-init="window.Echo.private('chat.{{ $record->id }}')
        .listen('MessageSent', (e) => {
            $wire.call('fetchMessages');
        });">
        <h3 class="text-lg font-medium text-gray-900 dark:text-white">
            Chat untuk Pengaduan #{{ $record->nomor_registrasi }}
        </h3>

        <div class="w-full p-4 space-y-4 overflow-y-auto bg-white border border-gray-300 rounded-lg shadow-sm h-96 dark:bg-gray-800 dark:border-gray-600"
            x-data="{
                scrollToBottom() {
                    $el.scrollTop = $el.scrollHeight
                }
            }" x-init="scrollToBottom()" @messages-updated.window="scrollToBottom()">
            @forelse ($messages as $message)
                @php
                    // LOGIKA BARU: Cek apakah pesan ini dikirim oleh user yang sedang login saat ini.
                    $isMyMessage = $message->user_id === auth()->id();
                @endphp

                <div class="flex {{ $isMyMessage ? 'justify-end' : 'justify-start' }}">
                    <div
                        class="max-w-xs px-4 py-2 rounded-lg lg:max-w-md {{ $isMyMessage ? 'bg-primary-500 text-white' : 'bg-gray-200 dark:bg-gray-700' }}">

                        <p
                            class="text-sm font-medium {{ $isMyMessage ? 'text-white' : 'text-gray-900 dark:text-white' }}">
                            {{ $message->user->name }}
                        </p>

                        <p class="text-sm">{{ $message->body }}</p>

                        <p class="mt-1 text-xs text-right {{ $isMyMessage ? 'text-primary-200' : 'text-gray-500' }}">
                            {{ $message->created_at->format('H:i') }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500">Belum ada pesan.</p>
            @endforelse
        </div>

        <form wire:submit.prevent="sendMessage" class="flex items-center space-x-2">
            <div class="flex-grow">
                <x-filament::input.wrapper>
                    <x-filament::input type="text" wire:model="newMessage" placeholder="Ketik balasan Anda..." />
                </x-filament::input.wrapper>
            </div>
            <x-filament::button type="submit">
                Kirim
            </x-filament::button>
        </form>
    </div>
</x-filament-panels::page>
