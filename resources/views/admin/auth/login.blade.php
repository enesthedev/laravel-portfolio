 <x-auth-layout>
     <div class="bg-[#151718] w-full pt-10 pb-5 px-5 flex items-center justify-center">
         <form class="w-full max-w-[500px] flex flex-col gap-y-5" method="post" action="{{ route('admin.login') }}">
             @method('POST')
             @csrf
             <div>
                 <label for="email-adress-icon" class="block mb-2 text-sm font-medium text-white">Eposta adresin:</label>
                 <div class="relative text-white">
                     <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                         <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                     </div>
                     <input type="email" name="email" id="email-adress-icon" class="bg-white/10 w-full pl-10 p-2 border-2 border-white/10 text-sm rounded-lg block focus:ring-1 focus:outline-0 focus:border-blue-500 focus:ring-blue-500 placeholder:text-white/50" placeholder="ben@enes.sh" value="{{ old('email') }}" required autofocus/>
                 </div>
             </div>
             <div>
                 <label for="password-icon" class="block mb-2 text-sm font-medium text-white">Şifre:</label>
                 <div class="relative text-white">
                     <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                         <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                     </div>
                     <input type="password" name="password" id="password-icon" class="bg-white/10 w-full pl-10 p-2 border-2 border-white/10 text-sm rounded-lg block focus:ring-1 focus:outline-0 focus:border-blue-500 focus:ring-blue-500 placeholder:text-white/50" placeholder="Benim gizli şifrem"/>
                 </div>
             </div>
             <div class="flex items-start mb-2">
                 <div class="flex items-center h-5">
                     <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 bg-white/10 rounded border border-white/10 focus:border-blue-300 focus:ring-3 focus:ring-blue-500/30 focus:outline-0 focus:ring-offset-0" required>
                 </div>
                 <div class="ml-3 text-sm">
                     <label for="terms" class="font-medium text-white/50">Yönetici girişi yaptığımda sistemde çıkabilecek tüm kötü yönelimli sorumlulukları üstüme alıyorum.</label>
                 </div>
             </div>
             <div>
                 <button type="submit" class="text-white bg-[#2557D6] hover:bg-[#2557D6]/90 focus:ring-4 focus:ring-[#2557D6]/30 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#2557D6]/50 mr-2 mb-2">
                     Hesaba Giriş Yap
                 </button>
             </div>
         </form>
     </div>

     <x-slot:scripts>
         @if($errors->any())
             <script type="text/javascript">
                 @foreach($errors->all() as $error)
                    window.toast.error.fire({
                        title: '{{ $error }}',
                    })
                 @endforeach
             </script>
         @endif
     </x-slot:scripts>
 </x-auth-layout>
