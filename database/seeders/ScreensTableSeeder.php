<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Screen;
use App\Models\Page;

class ScreensTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        // Landing
        $screen = Screen::firstOrCreate([
            'title' => 'About Enpulsion',
        ]);
        $pages = [
            'EMBRACING A NEW ERA IN THE NEAR-EARTH ECONOMY' => "Mobility in space is essential. Without it, we could not show you this site. You wouldn’t be able to read this, nor write your parents, nor text your friends, or to navigate your way back home, when needed.
            Life as we know it wouldn’t be the same without satellites. And satellites simply couldn’t be the engines of our modern societies if it wasn’t for their driving force — their thrusters.
            At ENPULSION it is our mission to create innovative ion thrusters that can serve as pillars to a thriving near-Earth economy, inspiring you to look up at the sky and see a better future.
            Mobility in space is needed, more than ever. Without this capability, satellites supporting life on Earth would be constantly exposed to cosmic threats.  If satellite communications were abruptly disrupted, you might not be able to use your phone anymore or be guided safely home when needed.
            Life as we know today just wouldn’t be the same without satellites. And their widespread use for fast digitalization in many sectors could have not happened if it wasn’t for their driving force — their propulsion systems. These allow spacecraft to complete missions in the most effective way, changing their orbit or inclination for better optimization.
            As the Near-Earth economy rapidly expanding and set to boom in the decade to come, ENPULSION is proud to be an enabler of this new wave of innovation.",
            'CELEBRATING 100 IN SPACE' => "ENPULSION is celebrating 100 active thrusters in space. Join us here at 100in.space.
            It is our celebration for achieving this important milestone — becoming the first smallsat electric propulsion systems provider to have 100 active thrusters orbiting the Earth!
            But even more, it is a heartfelt tribute to the past 100 years of space history, a fresh look into exciting ongoing technology developments in the present, and a curiosity-filled peek into the next 100 years of space activity.
            We look back into the past to better envision the future — to inspire the present with what has been and what lies ahead of us.",
        ];
        $weight = 1;
        $screen_id = $screen->id;

        foreach ($pages as $title => $text) {
            Page::firstOrCreate(compact('title', 'text', 'weight', 'screen_id'));
            $weight++;
        }

        // Present
        $screen = Screen::firstOrCreate([
            'title' => 'Present',
        ]);
        $pages = [
            'SPACE MOBILITY' => "Mobility. It sounds like a piece of cake, yet it is one of the biggest technical challenges to overcome in a harsh environment like outer space.
            Like all things in this Universe, spacecraft are exposed to cosmic hazards, such as solar storms, man-made or natural space objects.
            One of our biggest problems for the continuation of space activities today is concentrated in one specific orbit called the Low Earth Orbit (LEO). It is a particularly advantageous vantage point to observe our planet given its proximity, yet satellites at this altitude need more robust propulsion systems to escape atmospheric drag, which is a natural process by which satellites reenter the atmosphere and desintegrate thanks to celestial mechanics.
            The ability to move in orbit is not only critical to maintaining spacecraft at the right attitude – we call this attitude control, it also allows them to stay away from space debris, some of which are orbiting our Planet at speeds 15 times faster as than a bullet.
            As in a vintage video game, spacecraft must avoid collision with space junk at all costs to prevent damage. But as more and more satellites are being launched into orbit at an unprecedented rate to build new services and infrastructures, space traffic is becoming increasingly complex.
            In this precarious situation, it became clear that propulsion systems are not only critical to protecting spacecraft from harm during their lifetime, but they are also an absolute necessity to protect the space environment from being plagued by uncontrolled orbiting chunks of metal and chemicals. We need thrusters for the advancement of Space Sustainability and to carry on exploring the Universe safely.",
            'SPACE INFRASTRUCTURE' => "One can argue that the history of humankind is also the history of infrastructure.  May it be a bivuac, an outpost, a road, an island, a harbor, an airport, a spaceport, a space station or a moonbase, explorers and pioneers need shelters, wherever they intend to go. In its broader sense, infrastructure also means all supporting constructions and systems underpinning human expansion.
            And yet what is understood by space infrastructure is a relatively new concept. Dreamers already envisioned a future in space centuries ago, yet our understanding of the cosmos and what we can achieve is being challenged constantly.
            We are lucky enough to live in the century that will witness the construction of new space stations, Earth-Moon highways, lunar communications, all of which supporting intergalactic probes, asteroid mining, interplanetary missions searching for life elsewhere, and human settlements.  Today, these ideas are turning into reality.
            This infrastructure of a new kind, enabling human operations in this sci-fi like future, will be powered by thrusters. They are the pillars that can free spacecraft from the risk of drifting away because of the fundamental laws of physics and support the construction of complex spaceships, comparable in some ways to the International Space Station.",
            'SPACE MISSIONS' => "Finding a path in the unknown.
            There is nothing quite as challenging and humbling for the human mind than picturing the Universe, let alone the Multiverse. Space science has brought some of the most astonishing discoveries about our world and our understanding of time and space and will continue to do so in the next century. Space missions are the milestones of this scientific progress. They pave the way forward for the expansion of our knowledge. Powered by thrusters and advanced computing, space missions make the cosmos more palpable.
            But one could argue that Earth-bound science has the priority, that we should act against climate change instead of sending rovers to Mars. Why look up to the sky and invest in interplanetary missions when the one and only planet we have is ailing?
            Leaving aside all vital applications derived from space missions such as artificial limbs, insulin pumps, CAT scans, ice resistant airplanes, there is also a myriad of other reasons why we should invest in space. Let´s take Astronomy as one among many examples. Astronomy, the study of other worlds, helps us fathom our own planetary history, looking for archaeological evidence on extra-terrestrial grounds to understand what happened when Earth came to existence. Looking up above the clouds is also a matter of existential survival. What sounds a bit extreme at first is in the end easy to grasp: meteoroids are entering our atmosphere every day, our solar system has hundreds of black holes of which we know little, the centre of our galaxy happens to be one of them, our Sun will wipe us out eventually. All these cosmic realities seem to be far from everyone´s daily business and yet, this gives humanity a unique opportunity to rise above itself and to focus on global collective thinking, on a higher level of civilized planning, a long-term vision safeguarding our heritage “in the vastness of space and the immensity of time”, as Carl Sagan would say. It surely is not an easy feat, yet we must persevere before it is too late.",
            'SPACE SUSTAINABILITY' => "A beginning, an apogee and an end. A life cycle to everything on this planet and, most likely, beyond it. So it is with everything ever created by man, everything we ever sent to the proximate outer space, every object already roaming around our planet.
            Going by the name of space debris and very often - flying at speeds of up to 7 km/s, these objects can be harmful to say the least. But since space sustainability is a priority for everyone who is looking to benefit from space infrastructure, the necessary micro-adjustments for effectively avoiding collisions become an even bigger priority.
            In a future where our proximate outer space loses more and more of its “free” space to space infrastructure that serves our needs down here from up there, the efficiency, reliability and safety of our ion thrusters would become more and more sought for.",
            'SPACE INNOVATION' => "Space ambitions are growing, interplanetary travel has never been so attractive to investors, and it is expected that our scope of activity in zero-gravity will increase from the lowest orbits to the most distant celestial objects. For these reasons, many space enthusiasts are anticipating another period of sweeping innovation bringing another swath of ground-breaking technologies.
            Rocketry is reaching a peak of maturity, reusability and fuels with increased performance changed the rules of the game. As a result, launch opportunities increased, facilitating access to space for many ambitious entrepreneurs. A growing number of companies aim at developing business models for asteroid mining, micro-gravity experiments, lunar infrastructure or in-orbit servicing, assembling and manufacturing (ISAM). All these applications could have tremendous catalyzing effects on space commercialization.
            It is commonly accepted that industrial revolution brought profound change for human society. Yet, it would be foolish to ignore some of the harmful effects it also wrought on some aspects of that society, as if technological progress justified everything. The same logic should be applied to this revolution in space. This concern is often raised when discussing the path of space innovation. As NewSpace and Heritage Space are merging, the real question is whether we will be able to bring Space Sustainability to an acceptable level to preserve orbital and extra-terrestrial resources along the way. Thinking of orbits or planets in environmental terms is not as common and this mindset faces a lot of resistance, yet it is becoming critical to revaluate our “footprint” when it comes to space activities. This is the emerging reality of Space Sustainability.",
        ];
        $weight = 1;
        $screen_id = $screen->id;

        foreach ($pages as $title => $text) {
            Page::firstOrCreate(compact('title', 'text', 'weight', 'screen_id'));
            $weight++;
        }
    }
}
