@csrf
<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700" for="name">Name</label>
    <input class="input w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" type="text" name="name" id="name" value="{{old('name' ,$user->name ?? "")}}" >
    @error('name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
    <input class="input w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" type="email" name="email" id="email" value="{{old('email')}}" >
    @error('email')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
    <input class="input w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" type="password" name="password" id="password" value="{{old('password')}}" >
    @error('password')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700" for="password_confirmation">Confirm Password</label>
    <input class="input w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" type="password" name="password_confirmation" id="confirm_password"  value="{{old('password_confirmation')}}">
</div>
<button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
    Submit
</button>