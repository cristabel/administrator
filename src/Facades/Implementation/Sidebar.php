<?php namespace Cristabel\Administrator\Facades\Implementation;

class Sidebar {

	public function render($menuslist = [], $class = '')
	{
		if( !is_array($menuslist) || !count($menuslist) ) {

			return 'Sidebar no loaded';
		}

		$html = '<ul class="'.$class.'">';
		foreach ($menuslist as $key => $menu) {
			if( is_array($menu) ){
				$html .= "<li class=\"treeview\">";
					$html .= "<a>";
						$html .= "<span>". $key ."</span>";
						$html .= "<i class=\"fa fa-angle-left pull-right\"></i>";
					$html .= "</a>";
					$html .= $this->render($menu, 'treeview-menu');
				$html .="</li>";
			} else {
				if( is_numeric($key) ){
					$html .= "<li class=\"\">";
						$html .= "<a>";
							$html .= "<span>". $menu ."</span>";
						$html .= "</a>";
					$html .="</li>";					
				} else {
					$html .= "<li class=\"\">";
						$html .= "<a href=\"$menu\">";
							$html .= "<span>" .$key. "</span>";
						$html .= "</a>";
					$html .="</li>";					
				}
			}
		}

		return $html;
	}

}
