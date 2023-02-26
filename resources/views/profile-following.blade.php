<x-profile :sharedData="$sharedData" doctitle="Who {{$sharedData['username']}} is Follows">
        @include('profile-following-only')
</x-profile>
