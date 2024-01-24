{* 
    no need {extends file='layout/default.tpl'} 
    because smartyDisplay method alread attach it by default
    3rd param of smartyDisplay method, allow to choose another template or you can just set as ''
 *}
    
 {block name='content-title'}
    <div class="content-title">
    {$title} 
    </div>
{/block}
    
{block name=content}

<div class="container">
    {foreach $posts as $post}
    <div class="card">
        <div class="card-header">
            <img src="https://images6.alphacoders.com/312/thumb-1920-312773.jpg" alt="city" />
        </div>
        <div class="card-body">
            <span class="tag tag-pink">Design</span>
            <h4>
                10 Rules of Dashboard Design
            </h4>
            <p>
            </p>
            <button>
            <div class="user">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user" />
                <div class="user-info">
                    <h5>Carrie Brewer</h5>
                    <small>1w ago</small>
                </div>
            </div>
        </div>
        </div>
    {/foreach}
</div>


{/block}

