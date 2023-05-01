<?

$solutions = [
    array(
        "title" => "Baggage & Parcel Inspection",
        "description" => "Light and compact security screening system, designed for smaller installations , making it
        an excellent system for cruise lines, schools, prisons, and event-based security
        environments.",
        "image" => "images/baggage_inspector.jpeg"
    ),

    array(
        "title" => "Baggage & Parcel Inspection",
        "description" => "Light and compact security screening system, designed for smaller installations , making it
        an excellent system for cruise lines, schools, prisons, and event-based security
        environments.",
        "image" => "images/hold_baggage_inspector.jpeg"
    ),

    array(
        "title" => "Baggage & Parcel Inspection",
        "description" => "Light and compact security screening system, designed for smaller installations , making it
        an excellent system for cruise lines, schools, prisons, and event-based security
        environments.",
        "image" => "images/baggage_inspector.jpeg"
    ),

    array(
        "title" => "Baggage & Parcel Inspection",
        "description" => "Light and compact security screening system, designed for smaller installations , making it
        an excellent system for cruise lines, schools, prisons, and event-based security
        environments.",
        "image" => "images/hold_baggage_inspector.jpeg"
    ),

];


?>
<section>
    <div class="grid mx-auto justify-center items-center align-center py-8 px-8">

        <p class="text-black align-center justify-center text-3xl font-extrabold dark:text-black">We specialize in
        </p>
        <hr class="h-px my-8 bg-gray-200 align-center items-center justify-center border-0 dark:bg-gray-300">
        <p class="text-gray-500 text-xl dark:text-gray-400">
            <span class="text-black">Rapiscan Systems' Security Screening Equipment
                Fire Fighting & Security Screening Vehicles</span><br><br>
            XianEdge LTD, is the exclusive distributor of the industry leading Rapiscan
            Security Screening Systems within Southern Africa.

            We specialise in installing and supporting the full range of airport security, customs & border security,
            and people screening equipment.
        </p>
    </div>
</section>


<section>


    <div class="grid justify-center py-8 px-8 w-full">
        <p class="text-black text-3xl font-extrabold w-full dark:text-black">Our security solutions
        </p>
        <hr class="h-px my-8 w-full bg-gray-200 border-0 dark:bg-gray-300">
        <!-- <p class="text-gray-500 text-xl dark:text-gray-400">
            <span class="text-black">Rapiscan Systems' Security Screening Equipment
                Fire Fighting & Security Screening Vehicles</span><br><br>
            XianEdge LTD,s the exclusive distributor of the industry leading Rapiscan
            Security Screening Systems within Southern Africa.

            We specialise in installing and supporting the full range of airport security, customs & border security,
            and people screening equipment.
        </p> -->
        <div>
<!-- <section class="mx-auto w-screen lg:p-8 sm:p-2"> -->
    <!-- Card -->
    <div class="grid lg:grid-cols-3 lg:gap-6">

        <?php foreach ($solutions as $solution) {

            echo '<div class="max-w-md h-fit group">
            <div class="relative overflow-hidden">
                <img class="h-96 w-full object-scale-down"
                    src="' . ($solution['image']) . '"
                    alt="">
                <div
                    class="absolute grid h-full w-full bg-black/20 -bottom-10 pt-4 backdrop-blur-md bg-white/60 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <p class="font-semibold text-md text-black mx-2 py-2 px-5"><a href="#">' . ($solution['title']) . '</a><br><span class="text-md font-normal">
                            <!-- <hr> -->
                            ' . ($solution['description']) . '</span></p>
                </div>
                </div>
            </div>';


        }
        ?>

    </div>

</section>