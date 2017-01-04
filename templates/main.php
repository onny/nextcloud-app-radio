<?php
  style('radio', 'main');
  script('radio', 'main');
?>

    <div id="content" class="app-files" role="main">
        <div id="app-navigation">
            <ul class="with-icon">
                <li data-id="files" class="nav-files">
                    <a href="#" class="nav-icon-files svg">
				Top			</a>
                </li>
                <li data-id="recent" class="nav-recent">
                    <a href="#" class="nav-icon-recent svg">
				Recent			</a>
                </li>
                <li data-id="favorites" class="nav-favorites">
                    <a href="#" class="nav-icon-favorites svg">
				Favorites			</a>
                </li>
                <li data-id="sharingin" class="nav-sharingin">
                    <a href="#" class="nav-icon-sharingin svg">
				Categories			</a>
                </li>
            </ul>
            <div id="app-settings">
                <div id="app-settings-header">
                    <button class="settings-button" data-apps-slide-toggle="#app-settings-content">
				Settings			</button>
                </div>
                <div id="app-settings-content">
                    <audio id="player" src="" controls></audio>
                    <form id="radiosearch" action="javascript:void(0);">
                      <input id="radioquery" placeholder="Search for name" autofocus required></input>
                    </form>
                    <div id="files-setting-showhidden">
                        <input class="checkbox" id="showhiddenfilesToggle" checked="checked" type="checkbox">
                        <label for="showhiddenfilesToggle">Show hidden files</label>
                    </div>
                    <label for="webdavurl">WebDAV</label>
                    <input id="webdavurl" type="text" readonly="readonly" value="http://127.0.0.1/remote.php/webdav/" />
                    <em>Use this address to <a href="https://docs.nextcloud.com/server/11/go.php?to=user-webdav" target="_blank" rel="noreferrer">access your Files via WebDAV</a></em>
                </div>
            </div>
        </div>
    <div id="app-content">
        <div id="app-content-files" class="viewcontainer">
            <table id="filestable" data-preview-x="32" data-preview-y="32">
                <thead>
                    <tr>
                        <th id='headerName' class=" column-name">
                            <div id="headerName-container">
                                <a class="name sort columntitle" data-sort="name"><span>Name</span><span class="sort-indicator"></span></a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody id="fileList">
                <tr>
                  <td class="filename">
                    <a href="#" class="action action-favorite " data-original-title="" title="">
                      <span class="icon icon-star"></span>
                      <span class="hidden-visually">Favorite</span>
                    </a>
                    <label for="select-files-3">
                      <div class="thumbnail" style="background-image:url('http://www.swr.de/static/favicons/SWR1/favicons/SWR1_96.png'); background-size: 32px;"></div>
                    </label>
                    <a class="name" href="#">
                      <span class="nametext"><span class="innernametext">Radio 3</span></span>
                    </a>
                  </td>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
        </div>
    </div>
    <!-- closing app-content -->
