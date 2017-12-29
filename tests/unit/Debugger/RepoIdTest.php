<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Tests\Unit\Debugger;

use Google\Cloud\Debugger\ProjectRepoId;
use Google\Cloud\Debugger\RepoId;
use PHPUnit\Framework\TestCase;

/**
 * @group debugger
 */
class RepoIdTest extends TestCase
{
    use JsonTestTrait;

    public function testSerializes()
    {
        $repoId = new RepoId(new ProjectRepoId('projectId', 'repoName'), 'uid');
        $expected = [
            'projectRepoId' => [
                'projectId' => 'projectId',
                'repoName' => 'repoName'
            ],
            'uid' => 'uid'
        ];
        $this->assertProducesEquivalentJson($expected, $repoId);
    }
}