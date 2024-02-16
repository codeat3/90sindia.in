<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body>

              <section>
                <div class="flex flex-col justify-between w-full gap-4 px-8 py-6 text-xs font-medium text-zinc-500 lg:flex-row md:px-12 lg:px-24">
                  <div class="flex flex-row justify-between gap-4">
                    <p><span>Michael</span><span>Andreuzza</span></p>
                    <p><span>Web</span><span>Developer</span></p>
                  </div>
                  <p><a class="underline" href="#_">hey@michaelandreuzza.com</a></p>
                </div>
                <div class="px-8 py-24 mx-auto text-center md:px-12 lg:px-24 lg:pt-64 text-zinc-500">
                  <p class="max-w-xl mx-auto font-serif text-xl text-zinc-500">
                    <em>
                      Michael Andreuzza is an non award-winning full-stuck wannanbe developer,
                      based in Ontrio, Canada. Lead developer at Wind Basic, his work is
                      focused on creating bespoke, engaging &amp; effective digital
                      experiences.
                    </em>
                  </p>
                  <div class="grid grid-cols-1 gap-4 mx-auto mt-24 lg:gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-7xl">
                    <a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/1.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">Lexington Themes</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/2.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">Creative Solutions</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/3.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">Digital Innovations</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/4.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">WebCrafters</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/5.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">PixelPerfect Designs</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/6.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">CodeMasters</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/7.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">Web Wizards</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/8.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">TechCreators</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/9.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">WebArtistry</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/10.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">DigitalCraftsmen</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/11.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">SiteSculptors</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/13.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">CodeArtisans</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/12.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">WebWorks Pro</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/14.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">TechFusion</p>
                      </div></a><a href="#_" class="overflow-hidden rounded-md bg-zinc-100"><div class="p-4 lg:px-12 lg:py-24">
                        <img class="duration-500 rounded-lg shadow hover:shaodow-3xl hover:-translate-y-4" src="./images/myfolio/15.png" alt="#">
                        <p class="mt-8 text-sm text-zinc-500">DigitalCrafters</p>
                      </div></a>
                  </div>
                </div>
              </section>
              <section>
                <div class="flex flex-col justify-center w-full gap-4 px-8 py-6 text-xs font-medium tracking-tight uppercase text-zinc-400 lg:flex-row lg:gap-12 md:px-12 lg:px-24">
                  <p class="max-w-2xl mx-auto text-sm text-zinc-500">
                    © Windstatic. Design:
                    <a href="#_/" class="underline underline-offset-2">Wind Basic</a>. Demo
                    Images: Respective owners.
                  </p>
                </div>
              </section>

    </body>
</html>
