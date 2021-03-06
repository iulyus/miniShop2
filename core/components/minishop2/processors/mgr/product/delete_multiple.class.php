<?php

class msProductDeleteMultipleProcessor extends modObjectProcessor {

	public function process() {
		$ids = $this->getProperty('ids',null);
		if (empty($ids)) {
			return $this->success();
		}
		$ids = is_array($ids) ? $ids : explode(',',$ids);

		foreach ($ids as $id) {
			if (!empty($id)) {
				$this->modx->runProcessor('resource/delete',array('id' => $id));
			}
		}
		return $this->success();
	}
}
return 'msProductDeleteMultipleProcessor';