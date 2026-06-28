@props(['vit'])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="flex space-x-3">
            @can('update', $vit)
                <div class="flex gap-1">
                    <a href="/vits/{{ $vit->id }}/edit" class="btn btn-ghost btn-xs"> Edit </a>
                    <form method="POST" action="/vits/{{ $vit->id }}"> @csrf @method('DELETE') <button
                            type="submit" onclick="return confirm('Are you sure you want to delete this vit?')"
                            class="btn btn-ghost btn-xs text-error"> Delete </button>
                    </form>
                </div>
            @endcan

            <div class="min-w-0 flex-1">
                <div class="flex justify-between w-full">
                    <div class="flex items-center gap-1">
                        <div class="flex items-center gap-1">
                        <span class="text-sm font-semibold">{{ $vit->user ? $vit->user->name : 'Anonymous' }}</span>
                        <span class="text-base-content/60">·</span>
                        <span class="text-sm text-base-content/60">{{ $vit->created_at->diffForHumans() }}</span>
                        @if ($vit->updated_at->gt($vit->created_at->addSeconds(5)))
                            <span class="text-base-content/60">·</span>
                            <span class="text-sm text-base-content/60 italic">edited</span>
                        @endif
                    </div>
                    </div>

                    <div class="flex gap-1">
                        <a href="/vits/{{ $vit->id }}/edit" class="btn btn-ghost btn-xs">
                            Edit
                        </a>
                        <form method="POST" action="/vits/{{ $vit->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this vit?')"
                                class="btn btn-ghost btn-xs text-error">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                <p class="mt-1">{{ $vit->message }}</p>
            </div>
        </div>
    </div>
</div>