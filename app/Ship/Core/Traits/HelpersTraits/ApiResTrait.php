<?php

namespace App\Ship\core\Traits\HelpersTraits;

trait ApiResTrait
{
    /**
     * Không tự do thay đổi hàm này
     */
    public function sendResponse(mixed $data, string $message = '', int $code = 200, bool $jsonForceObject = false, array $extraOptions = [])
    {
        return response()->json([
            'success' => true,
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ], $code, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | (isset($extraOptions['forceCheckNumeric']) && $extraOptions['forceCheckNumeric'] === false ? 0 : JSON_NUMERIC_CHECK) | (empty($data) || $jsonForceObject ? JSON_FORCE_OBJECT : 0));
    }

    public function sendPureResponse(mixed $data, int $code = 200, bool $jsonForceObject = false, array $extraOptions = [])
    {
        return response()->json($data, $code, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | (isset($extraOptions['forceCheckNumeric']) && $extraOptions['forceCheckNumeric'] === false ? 0 : JSON_NUMERIC_CHECK) | (empty($data) || $jsonForceObject ? JSON_FORCE_OBJECT : 0));
    }

    /**
     * Không tự do thay đổi hàm này
     */
    public function sendError($error = 'unauthorize', int $code = 200, string $message = '', mixed $data = [], array $extraOptions = [])
    {
        return response()->json([
            'success' => false,
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'error' => $error,
        ], $code, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | (isset($extraOptions['forceCheckNumeric']) && $extraOptions['forceCheckNumeric'] === false ? 0 : JSON_NUMERIC_CHECK) | (empty($data) ? JSON_FORCE_OBJECT : 0));
    }

    /**
     * Bỏ Tự check JSON NUMBER
     */
    public function sendResponseNotNumberic(mixed $data, string $message = '', int $code = 200, bool $jsonForceObject = false)
    {
        return response()->json([
            'success' => true,
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ], $code, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | (empty($data) || $jsonForceObject ? JSON_FORCE_OBJECT : 0));
    }
} // End class
