<?php

use Illuminate\Database\Seeder;

class ExhibitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $janine= \App\User::where('name','Janine')->first();
        $et= \App\User::where('name','E.T.')->first();

        $exhibit1 = new \App\Exhibit;
        $exhibit1->user_id = $janine->id;
        $exhibit1->exhibit_name ='Blazar Artist Concept';
        $exhibit1->year = '2016';
        $exhibit1->artist ='NASA/JPL-Caltech/GSFC';
        $exhibit1->image_URL ='https://images-assets.nasa.gov/image/PIA20912/PIA20912~small.jpg';
        $exhibit1->description ='Black-hole-powered galaxies called blazars are the most
                                common sources detected by NASA\'s Fermi Gamma-ray Space
                                Telescope. As matter falls toward the supermassive black
                                hole at the galaxy\'s center, some of it is accelerated
                                outward at nearly the speed of light along jets pointed
                                in opposite directions. When one of the jets happens to
                                be aimed in the direction of Earth, as illustrated here,
                                the galaxy appears especially bright and is classified as
                                a blazar. ';
        $exhibit1->save();

        $exhibit2 = new \App\Exhibit;
        $exhibit2->user_id = $janine->id;
        $exhibit2->exhibit_name ='The Hill, The Moon, and Saturn';
        $exhibit2->year = '2011';
        $exhibit2->artist ='Tamas Ladanyi';
        $exhibit2->image_URL ='https://apod.nasa.gov/apod/image/1811/conjunction_181111_ladanyi_web.jpg';
        $exhibit2->description ='Last Sunday when the Moon was young its sunlit crescent hung
                                low near the western horizon at sunset. With strong earthshine
                                it was joined by Saturn shining in the early evening sky for a
                                beautiful conjunction visible to skygazers around our fair planet.
                                On that clear evening on a hill near Veszprem, Hungary mother, daughter,
                                bright planet, and young Moon are framed in this quiet night skyscape taken
                                with a telephoto lens. Of course the Moon ages too quickly for some, and by
                                tonight the sunlit part has reached its first quarter phase. This weekend skygazers
                                spending quality time under Moon and stars might expect to see the annual rain of
                                comet dust otherwise known as the Leonid meteor shower.';
        $exhibit2->save();

        $exhibit3 = new \App\Exhibit;
        $exhibit3->user_id = $et->id;
        $exhibit3->exhibit_name ='The Sword of Orion';
        $exhibit3->year = '2006';
        $exhibit3->artist ='TNASA/JPL-Caltech/Univ. of Toledo';
        $exhibit3->image_URL ='https://images-assets.nasa.gov/image/PIA08653/PIA08653~medium.jpg';
        $exhibit3->description ='This image from NASA Spitzer Space Telescope shows the Orion nebula,
                                 our closest massive star-making factory, 1,450 light-years from Earth.
                                 The nebula is close enough to appear to the naked eye as a fuzzy star
                                 in the sword of the constellation.';
        $exhibit3->save();

        $exhibit4 = new \App\Exhibit;
        $exhibit4->user_id = $et->id;
        $exhibit4->exhibit_name ='Pathfinder on Mars';
        $exhibit4->year = '1997';
        $exhibit4->artist ='TNASA/JPL';
        $exhibit4->image_URL ='https://images-assets.nasa.gov/image/PIA01120/PIA01120~medium.jpg';
        $exhibit4->description ='Pathfinder on Mars';
        $exhibit4->save();

        $exhibit5 = new \App\Exhibit;
        $exhibit5->user_id = $et->id;
        $exhibit5->user_id = $et->id;
        $exhibit5->exhibit_name ='Westerlund 2 — Hubble’s 25th anniversary image';
        $exhibit5->year = '2015';
        $exhibit5->artist ='NASA, ESA, the Hubble Heritage Team (STScI/AURA), A. Nota (ESA/STScI), and the Westerlund 2 Science Team';
        $exhibit5->image_URL ='https://cdn.spacetelescope.org/archives/images/screen/heic1509a.jpg';
        $exhibit5->description ='This NASA/ESA Hubble Space Telescope image of the cluster Westerlund 2
                                and its surroundings has been released to celebrate Hubble’s 25th year
                                in orbit and a quarter of a century of new discoveries, stunning images
                                and outstanding science.
                                The image’s central region, containing the star cluster, blends visible-light
                                data taken by the Advanced Camera for Surveys and near-infrared exposures taken
                                by the Wide Field Camera 3. The surrounding region is composed of visible-light
                                observations taken by the Advanced Camera for Surveys.';
        $exhibit5->save();

    }
}
