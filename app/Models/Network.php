<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $table = 'networks';

    public function tv()
    {
        return $this->belongsToMany(Tv::class);
    }
    public function movie()
    {
        return $this->belongsToMany(Movie::class);
    }
}
