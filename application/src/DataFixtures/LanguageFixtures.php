<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $languages = [
            [
                'name' => 'Français',
                'code' => 'fr'
            ],
            [
                'name' => 'English (GB)',
                'code' => 'en-GB'
            ],
            [
                'name' => 'English (United States)',
                'code' => 'en-GB'
            ],
            [
                'name' => 'Español',
                'code' => 'es'
            ],
            [
                'name' => 'Português',
                'code' => 'pt'
            ],
            [
                'name' => 'Deutsch',
                'code' => 'de'
            ],
            [
                'name' => '日本語',
                'code' => 'jp'
            ],
            [
                'name' => 'Traditional Chinese',
                'code' => 'zh-TW'
            ],
            [
                'name' => 'Simplified Chinese',
                'code' => 'zh-CN'
            ],
            [
                'name' => 'Русский',
                'code' => 'ru'
            ],
        ];

        foreach ($languages as $languageData) {
            $language = new Language($languageData['name'], $languageData['code']);
            $manager->persist($language);
        }

        $manager->flush();
    }
}
