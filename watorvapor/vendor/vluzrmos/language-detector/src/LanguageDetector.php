<?php

namespace Vluzrmos\LanguageDetector;

use Symfony\Component\Translation\TranslatorInterface as Translator;
use Vluzrmos\LanguageDetector\Contracts\DetectorDriverInterface as Driver;
use Vluzrmos\LanguageDetector\Contracts\LanguageDetectorInterface;
use Vluzrmos\LanguageDetector\Contracts\ShouldPrefixRoutesInterface as ShouldPrefixRoute;

/**
 * Class LanguageDetector.
 */
class LanguageDetector implements LanguageDetectorInterface
{
    /**
     * Translator instance.
     * @var Translator
     */
    protected $translator;

    /**
     * Driver to detect and apply the language.
     * @var Driver
     */
    protected $driver;

    /**
     * @param Translator $translator
     * @param Driver     $driver
     */
    public function __construct(Translator $translator, Driver $driver = null)
    {
        $this->translator = $translator;
        $this->driver = $driver;
    }

    /**
     * Detect and apply the detected language.
     *
     * @return string|null Returns the detected locale or null.
     */
    public function detectAndApply()
    {
        $language = $this->detect();

        if ($language) {
            $this->apply($language);
        }

        return $language;
    }

    /**
     * Detect the language.
     *
     * @return string
     */
    public function detect()
    {
        return $this->getDriver()->detect();
    }

    /**
     * Get the driver.
     *
     * @return Driver
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Set driver to detect language.
     *
     * @param Driver $driver
     */
    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Set locale to the application.
     *
     * @param string $locale
     */
    public function apply($locale)
    {
        $this->translator->setLocale($locale);
    }

    /**
     * Get the route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        $driver = $this->getDriver();

        if ($driver instanceof ShouldPrefixRoute) {
            return $driver->routePrefix($this->translator->getLocale());
        }

        return '';
    }
}
