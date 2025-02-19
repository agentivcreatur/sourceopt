<?php declare(strict_types=1);

namespace HTML\Sourceopt\Service;

/**
 * @internal
 * @coversNothing
 */
class CleanHtmlServiceTest extends \PHPUnit\Framework\TestCase
{
    public function testFormatHtml(): void
    {
        $this->markTestSkipped();

        $clean = new CleanHtmlService();
        $config = [
            'enabled' => true,
            'removeComments' => true,
            'formatHtml' => 4,
            'formatHtml.' => [
                'tabSize' => 2,
            ],
        ];

        $svg =
'<svg>
  <path/>
  <path/>
  <path>
    <path/>
    <path>
      <path>
        <path></path>
      </path>
    </path>
  </path>
</svg>';
        $result = $clean->clean($svg, $config);
        $this->assertEquals($svg, $result);
    }
}
