<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-kegiatan-pam-pembangunan",
  *      operationId="browseR.IN.10-RegisterKegiatanPengamananPembangunanStrategis",
  *      tags={"register-kegiatan-pam-pembangunan"},
  *      summary="Browse R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      description="Returns list of R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/register-kegiatan-pam-pembangunan/read?slug=register-kegiatan-pam-pembangunan&id={id}",
  *      operationId="readR.IN.10-RegisterKegiatanPengamananPembangunanStrategis",
  *      tags={"register-kegiatan-pam-pembangunan"},
  *      summary="Get R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis based on id",
  *      description="Returns R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/register-kegiatan-pam-pembangunan/add",
  *      operationId="addR.IN.10-RegisterKegiatanPengamananPembangunanStrategis",
  *      tags={"register-kegiatan-pam-pembangunan"},
  *      summary="Insert new R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      description="Insert new R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-kegiatan-pam-pembangunan/edit",
  *      operationId="editR.IN.10-RegisterKegiatanPengamananPembangunanStrategis",
  *      tags={"register-kegiatan-pam-pembangunan"},
  *      summary="Edit an existing R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      description="Edit an existing R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-kegiatan-pam-pembangunan/delete",
  *      operationId="deleteR.IN.10-RegisterKegiatanPengamananPembangunanStrategis",
  *      tags={"register-kegiatan-pam-pembangunan"},
  *      summary="Delete one record of R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      description="Delete one record of R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-pam-pembangunan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-kegiatan-pam-pembangunan/delete-multiple",
  *      operationId="deleteMultipleR.IN.10-RegisterKegiatanPengamananPembangunanStrategis",
  *      tags={"register-kegiatan-pam-pembangunan"},
  *      summary="Delete multiple record of R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      description="Delete multiple record of R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-pam-pembangunan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-kegiatan-pam-pembangunan/sort",
  *      operationId="sortR.IN.10-RegisterKegiatanPengamananPembangunanStrategis",
  *      tags={"register-kegiatan-pam-pembangunan"},
  *      summary="Sort existing R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      description="Sort existing R.IN.10 - Register Kegiatan Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-pam-pembangunan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="sektor"), 
  *                         @OA\Property(type="string", property="nomor"), 
  *                         @OA\Property(type="string", property="tanggal"), 
  *                         @OA\Property(type="string", property="disposisi"), 
  *                         @OA\Property(type="string", property="nama petugas"), 
  *                         @OA\Property(type="string", property="hasil"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */