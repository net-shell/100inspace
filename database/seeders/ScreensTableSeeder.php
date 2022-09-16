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
        // Purge existing ecords
        Screen::truncate();
        Page::truncate();

        // Landing
        $this->addScreen('JOIN 100IN.SPACE', [
            'EMBRACING A NEW ERA IN THE NEAR-EARTH ECONOMY' => [
                'text' => "Mobility in space is essential. Without it, we could not show you this site. You wouldn’t be able to read this, nor write your parents, nor text your friends, or to navigate your way back home, when needed.
Life as we know it wouldn’t be the same without satellites. And satellites simply couldn’t be the engines of our modern societies if it wasn’t for their driving force — their thrusters.
At ENPULSION it is our mission to create innovative ion thrusters that can serve as pillars to a thriving near-Earth economy, inspiring you to look up at the sky and see a better future.
Mobility in space is needed, more than ever. Without this capability, satellites supporting life on Earth would be constantly exposed to cosmic threats.  If satellite communications were abruptly disrupted, you might not be able to use your phone anymore or be guided safely home when needed.
Life as we know today just wouldn’t be the same without satellites. And their widespread use for fast digitalization in many sectors could have not happened if it wasn’t for their driving force — their propulsion systems. These allow spacecraft to complete missions in the most effective way, changing their orbit or inclination for better optimization.
As the Near-Earth economy rapidly expanding and set to boom in the decade to come, ENPULSION is proud to be an enabler of this new wave of innovation.",
                'bg_video' => 'sceneTransition_001-HQ.mp4',
            ],
            '' => [
                'video' => 'https://www.youtube.com/embed/zzbBLm1nsUA',
                'bg_video' => 'sceneTransition_001-HQ.mp4',
            ],
            'CELEBRATING 100 IN SPACE' => [
                'text' => "ENPULSION is celebrating 100 active thrusters in space. Join us here at 100in.space.
It is our celebration for achieving this important milestone — becoming the first smallsat electric propulsion systems provider to have 100 active thrusters orbiting the Earth!
But even more, it is a heartfelt tribute to the past 100 years of space history, a fresh look into exciting ongoing technology developments in the present, and a curiosity-filled peek into the next 100 years of space activity.
We look back into the past to better envision the future — to inspire the present with what has been and what lies ahead of us.",
                'bg_video' => 'sceneTransition_002-HQ.mp4',
            ],
        ]);

        // Past
        $this->addScreen('THE PAST', [
            'The Era of Visionaries and Pioneers — until the mid 1950s' => [
                'text' => "The history of electric space propulsion begins a few hundreds of kilometers from Moscow. Constantin Tsiolkovksy (1857-1835), a nearly deaf and self-taught schoolteacher inspired by Jules Verne’s stories of space travel, dreamed about interplanetary spaceflight. He is considered today as one of the three fathers of modern rocketry who laid the theoretical groundwork that became the basis for aerospace engineering. He is also one of the first scientists who ever mentioned electric propulsion in his early publications, in 1911, although he remained highly sceptical about its feasibility. In 1924, he even declared: “the force of electricity is unlimited and can, therefore, produce a powerful flux of ionized helium to serve a spaceship. However, we shall leave these dreams for a while and return to our prosaic explosives.” Electricity was poorly known at the time, and therefore electric propulsion was still considered a dream.
On the other side of the Pacific, Robert Goddard (1882-1945), one of Tsiolkovksky’s contemporaries, was working on both electricity and propulsion. Although he often is identified as another father of modern rocketry, no historical evidence has showed a direct connection between both visionaries. Being naturally drawn to the topic, Goddard mentioned electric propulsion in his notebook as early as 1906 and came up with the basic principles for the acceleration of electrons, which kept him busy for another decade. In 1917, he patented an important method for producing electrified jets of gas, the first documented electrostratic ion accelerator in history.  And yet, as the United States entered World War I, scientists focused their efforts on practical and well mastered chemical propulsion solutions that better fitted military needs at the time.
A few years later, Hermann Oberth (1894-1989) took the propulsion community by storm. In 1922, his doctoral research proposal on rocket science labelled as “utopian” was turned down by the University of Heidelberg. He was then invited to defend his thesis a year later at the University of Cluj in Romania and published a controversial book called The Rocket Into Planetary Space that he further developed and republished in 1929. This publication, describing all practical considerations associated with the design of an electricity-powered spacecraft, rapidly became an immense source of inspiration for a whole generation of upcoming rocket scientists and science fiction writers that brought spaceflight even closer to reality. But many fields still needed to be better understood for electric propulsion to eventually blossom.",
                'image' => 'past_photo_1-1.png',
            ],
            'Turned Into Reality — from the 1940s to 1990' => [
                'text' => "Waiting for their moment of glory, electric propulsion concepts were left on dusty shelves for a long time as jury was still out on whether it even could become an effective solution for spacecraft. In the context of growing geopolitical tensions, the United States and the Soviet Union took two different technical research trajectories for electric propulsion: the Americans focused on gridded ion thrusters, or ion drives, while Soviets put an early emphasis on Hall effect thrusters. This can be explained by scientific breakthroughs in both countries at the same time.
In the United States, Ernst Stuhlinger (1913–2008), who was familiar with Oberth’s ideas, gave electric propulsion research a new impulse and became a leading figure in the field, proactively supported by Wernher von Braun (1912-1977) himself. He gathered all available research findings at the time and his efforts helped to turn electric propulsion science into a legitimate area of research, anchoring it into reality once and for all. In doing so, he shaped the American approach to electric propulsion at an early phase and his legacy can still be seen today. This newfound curiosity for electric solutions led to a handful of experiments such as SERT-1, the SNAPSHOT and ATS programmes that were conducted throughout the 1960s although they never led to the launch of an operational electricity-powered satellite.  Unresolved technical challenges such as contaminations and low lifetimes eroded the promising future of electric propulsion and nurtured skepticism on their practicality for another 30 years.
In the Soviet Union, scientists started working on electric propulsion at a very early stage. At the Soviet design bureau OKB-1 under the leadership of no other than Sergei Korolev (1907–1966), the heirs of Tsiolkovsky focused on the development of Hall effect thrusters, catalyzed by the growing mastery of plasma physics. Cutting edge research was conducted from the 1960s onwards as well, from research lab to research lab, leading to the creation of FDB Fakel, now Fakel Industries which is still producing hall thrusters today.
Not only the United States and the Soviet Union pursued these ambitions: Japan, Germany and France carried out similar research to find the ideal thruster and turn in-orbit mobility into reality.",
                'image' => 'past_photo_2-1.png',
            ],
            'The Rise of the Electric Age — from the 1990s to 2022' => [
                'text' => "The history of electric propulsion (EP) definitely changed its course after the collapse of the Soviet Union. The licensing of Soviet proven Stationary Plasma Thruster (SPT) technology led to the diffusion of electric propulsion to Europe and the United States, creating subclasses of EP across the world. In 1991, Kaliningrad and Moscow, American propulsion scientists came to test SPT in Kaliningrad, where Fakel sits, and Moscow and their findings confirmed that STP performances were promising for the commercial industry. First considered mostly for stationkeeping, these Soviet thrusters were progressively used for other applications such as orbit raising.
The new millennium also was a turning point for space exploration as many advanced concepts were demonstrated during this period, debunking the myths about electric propulsion.
The Deep Space 1 mission in 1998, was a technology demonstrator designed for interplanetary travel that produced NASA’s first close-up pictures of a comet nucleus. It is one of the key missions that contributed to this shift of perception as electric propulsion proved to be a strong contender for missions requiring a high degree of maneuvarability. This proven technology supported the Dawn mission launched in 2009, the first NASA exploratory mission to use ion propulsion for the study of two protoplanets in the asteroid belt: Vesta and Ceres. The mission was terminated only in 2018 and the spacecraft was left orbiting around Ceres.
In Europe, the quest for capable thrusters gained momentum with the SMART-1 mission launched in 2003. Four years after Deep Space-1 and six years before the Dawn mission, the European Space Agency launched its first lunar probe, SMART-1, who studied the chemical composition of the soil and tested critical capabilities for navigation and control maneuvers along the way. It reached operational lunar orbit in 2005 before crashing into the Moon a year later at a speed of 2 kilometers per second, creating a huge cloud of dust that could be seen from Earth. The same year, the Japanese Hayabusa spacecraft, also powered by ion engines, landed on the 25143 Itokawa asteroid, and returned samples to Earth in 2010.
This period of impressive technological innovation was a paradigm shift for the industry. Electric propulsion repeatedly demonstrated its potential for demanding missions, building trust in their reliability and performances. After decades of being considered impractical and unreliable, electric propulsion supported some of the most innovative missions in deep space exploration and marked the birth of the electric age for spacecraft. The commercial availability of some of the most advanced EP thrusters coming from the Soviet Union combined with successful technology demonstrations favourized their adoption on the commercial telecom market. Operators recognized their value for high-precision maneuvers and set at the same time a new standard for years to come. Between 2000 and 2010, the number of electricity powered satellites more than doubled, and the commercialization of EP thrusters started gaining momentum ever since.",
                'image' => 'past_photo_3-1.png',
            ],
        ]);

        // Present
        $this->addScreen('THE PRESENT', [
            'SPACE MOBILITY' => [
                'text' => "Mobility. It sounds like a piece of cake, yet it is one of the biggest technical challenges to overcome in a harsh environment like outer space.
Like all things in this Universe, spacecraft are exposed to cosmic hazards, such as solar storms, man-made or natural space objects.
One of our biggest problems for the continuation of space activities today is concentrated in one specific orbit called the Low Earth Orbit (LEO). It is a particularly advantageous vantage point to observe our planet given its proximity, yet satellites at this altitude need more robust propulsion systems to escape atmospheric drag, which is a natural process by which satellites reenter the atmosphere and desintegrate thanks to celestial mechanics.
The ability to move in orbit is not only critical to maintaining spacecraft at the right attitude – we call this attitude control, it also allows them to stay away from space debris, some of which are orbiting our Planet at speeds 15 times faster as than a bullet.
As in a vintage video game, spacecraft must avoid collision with space junk at all costs to prevent damage. But as more and more satellites are being launched into orbit at an unprecedented rate to build new services and infrastructures, space traffic is becoming increasingly complex.
In this precarious situation, it became clear that propulsion systems are not only critical to protecting spacecraft from harm during their lifetime, but they are also an absolute necessity to protect the space environment from being plagued by uncontrolled orbiting chunks of metal and chemicals. We need thrusters for the advancement of Space Sustainability and to carry on exploring the Universe safely.",
                'bg_video' => 'sceneTransition_003-HQ.mp4',
            ],
            'SPACE INFRASTRUCTURE' => [
                'text' => "One can argue that the history of humankind is also the history of infrastructure.  May it be a bivuac, an outpost, a road, an island, a harbor, an airport, a spaceport, a space station or a moonbase, explorers and pioneers need shelters, wherever they intend to go. In its broader sense, infrastructure also means all supporting constructions and systems underpinning human expansion.
And yet what is understood by space infrastructure is a relatively new concept. Dreamers already envisioned a future in space centuries ago, yet our understanding of the cosmos and what we can achieve is being challenged constantly.
We are lucky enough to live in the century that will witness the construction of new space stations, Earth-Moon highways, lunar communications, all of which supporting intergalactic probes, asteroid mining, interplanetary missions searching for life elsewhere, and human settlements.  Today, these ideas are turning into reality.
This infrastructure of a new kind, enabling human operations in this sci-fi like future, will be powered by thrusters. They are the pillars that can free spacecraft from the risk of drifting away because of the fundamental laws of physics and support the construction of complex spaceships, comparable in some ways to the International Space Station.",
                'bg_video' => 'sceneTransition_004-HQ.mp4',
            ],
            'SPACE MISSIONS' => [
                'text' => "Finding a path in the unknown.
There is nothing quite as challenging and humbling for the human mind than picturing the Universe, let alone the Multiverse. Space science has brought some of the most astonishing discoveries about our world and our understanding of time and space and will continue to do so in the next century. Space missions are the milestones of this scientific progress. They pave the way forward for the expansion of our knowledge. Powered by thrusters and advanced computing, space missions make the cosmos more palpable.
But one could argue that Earth-bound science has the priority, that we should act against climate change instead of sending rovers to Mars. Why look up to the sky and invest in interplanetary missions when the one and only planet we have is ailing?
Leaving aside all vital applications derived from space missions such as artificial limbs, insulin pumps, CAT scans, ice resistant airplanes, there is also a myriad of other reasons why we should invest in space. Let´s take Astronomy as one among many examples. Astronomy, the study of other worlds, helps us fathom our own planetary history, looking for archaeological evidence on extra-terrestrial grounds to understand what happened when Earth came to existence. Looking up above the clouds is also a matter of existential survival. What sounds a bit extreme at first is in the end easy to grasp: meteoroids are entering our atmosphere every day, our solar system has hundreds of black holes of which we know little, the centre of our galaxy happens to be one of them, our Sun will wipe us out eventually. All these cosmic realities seem to be far from everyone´s daily business and yet, this gives humanity a unique opportunity to rise above itself and to focus on global collective thinking, on a higher level of civilized planning, a long-term vision safeguarding our heritage “in the vastness of space and the immensity of time”, as Carl Sagan would say. It surely is not an easy feat, yet we must persevere before it is too late.",
                'bg_video' => 'sceneTransition_005-HQ.mp4',
            ],
            'SPACE SUSTAINABILITY' => [
                'text' => "A beginning, an apogee and an end. A life cycle to everything on this planet and, most likely, beyond it. So it is with everything ever created by man, everything we ever sent to the proximate outer space, every object already roaming around our planet.
Going by the name of space debris and very often - flying at speeds of up to 7 km/s, these objects can be harmful to say the least. But since space sustainability is a priority for everyone who is looking to benefit from space infrastructure, the necessary micro-adjustments for effectively avoiding collisions become an even bigger priority.
In a future where our proximate outer space loses more and more of its “free” space to space infrastructure that serves our needs down here from up there, the efficiency, reliability and safety of our ion thrusters would become more and more sought for.",
                'bg_video' => 'sceneTransition_006-HQ.mp4',
            ],
            'SPACE INNOVATION' => [
                'text' => "Space ambitions are growing, interplanetary travel has never been so attractive to investors, and it is expected that our scope of activity in zero-gravity will increase from the lowest orbits to the most distant celestial objects. For these reasons, many space enthusiasts are anticipating another period of sweeping innovation bringing another swath of ground-breaking technologies.
Rocketry is reaching a peak of maturity, reusability and fuels with increased performance changed the rules of the game. As a result, launch opportunities increased, facilitating access to space for many ambitious entrepreneurs. A growing number of companies aim at developing business models for asteroid mining, micro-gravity experiments, lunar infrastructure or in-orbit servicing, assembling and manufacturing (ISAM). All these applications could have tremendous catalyzing effects on space commercialization.
It is commonly accepted that industrial revolution brought profound change for human society. Yet, it would be foolish to ignore some of the harmful effects it also wrought on some aspects of that society, as if technological progress justified everything. The same logic should be applied to this revolution in space. This concern is often raised when discussing the path of space innovation. As NewSpace and Heritage Space are merging, the real question is whether we will be able to bring Space Sustainability to an acceptable level to preserve orbital and extra-terrestrial resources along the way. Thinking of orbits or planets in environmental terms is not as common and this mindset faces a lot of resistance, yet it is becoming critical to revaluate our “footprint” when it comes to space activities. This is the emerging reality of Space Sustainability.",
                'bg_video' => 'sceneTransition_007-HQ.mp4',
            ],
        ]);

        // Future
        $this->addScreen('THE FUTURE', [
            'MEET THE FUTURE' => [
                'text' => "Meet the future. Since the beginning of our second millennium, we observed the Universe like we never had before. Scientific hypotheses turned into theories, and got proven al
Anna is the personification of the future ENPULSION believes in.",
                'image' => 'Asset_Girl1.png',
            ],
            'MEET ANNA' => [
                'text' => "Let us introduce you to Anna. She is 12, just a teenager. Her relationship to outer space is very different than her elders. She heard about aerospace engineering and artificial intelligence since kindergarten. In her present, our future, looks like what we envisioned, maybe with a few setbacks along the way.
Anna’s grandfathers and grandmothers probably sticked to their televisions, watching in amazement as a human stepped on the moon for the first time. That 1969 landing is one of the greatest achievements not only of that decade, but of humankind.
But now the year is 2023, Anna has just turned 13 and is beginning a school project for lunar satellites.",
                'image' => 'Asset_Girl2.png',
            ],
            'MOON ROCKS!' => [
                'text' => "In late 2024, when Anna is just 14 years old, Lunar Gateway has already been built — a small yet important space station in the Moon’s orbit, which will play a pivotal role to scientific research and communication.
The Earth rise on the Moon, here is nothing in the Universe that is quite like it.
Anna imagines herself among those astronauts who will one day visit Lunar Gateway, and her interests in physics and futurology become as big as a whole planet.",
                'image' => 'Asset_Moon.png',
            ],
            'MARS MISSION' => [
                'text' => "The year is 2026, Anna is already 16 years old and has just realized that the basis of her dreams in space is the ability to move around in it.
With great zeal and thirst for knowledge, Anna throws herself into the latest findings about ion drives and their fantastic possibilities. At the same time, Anna finds the upcoming Mars missions terribly exciting, just imagine: Humans setting foot on the Red Planet for the first time! Propulsion systems are becoming more and more interesting to Anna, so she sends an e-mail to ENPULSION asking if she can start an internship. The future can begin…",
                'image' => 'Asset_Mars.png',
            ],
            'ASTEROID LANDING AND OTHER MOONS' => [
                'text' => "The first asteroid landing will take place in 2028, when Anna graduates from high school, and university now lies ahead of her. Her future as a scientist thus lies ahead of her, and maybe - who knows — even as an astronaut?",
                'image' => 'Asset_Asteroid.png',
            ],
            'HER FUTURE UNVEILS' => "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet",
        ]);
    }

    private function addScreen($title, $pages)
    {
        // Add screen
        $slug = str_slug(strtolower($title));
        $weight = Screen::count() + 1;
        $screen = Screen::firstOrCreate(compact('title', 'slug', 'weight'));

        // Add pages
        if (!$pages) return;
        $weight = 1;
        $screen_id = $screen->id;

        foreach ($pages as $title => $page) {
            $model = compact('title', 'weight', 'screen_id');
            
            if (is_array($page)) {
                $model = array_merge($model, $page);
            } else if(is_string($page)) {
                $model['text'] = $page;
            }

            Page::firstOrCreate($model);
            $weight++;
        }
    }
}
